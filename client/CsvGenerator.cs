using System;
using System.Collections.Generic;
using System.Configuration;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.IO;
using System.Text.RegularExpressions;
using System.Collections;
using System.Runtime;
using Microsoft.Office.Interop.Word;
using System.Runtime.InteropServices.ComTypes;
using ResumeUploader;
using System.Runtime.Remoting.Messaging;
namespace ResumeUploader
     
{

    public partial class frm_ResumeUploader : Form , IDisposable
    {

        static ApplicationLogic al = new ApplicationLogic();
        
        /* variable declaration*/
        static ArrayList gender = new ArrayList();
        private bool _conversionIsRunning = false;
        private delegate void ConverterWorkerDelegate();
        private readonly object _sync = new object();
        Microsoft.Office.Interop.Word.Application Winword ;
        object missing = System.Reflection.Missing.Value;
        static string Temppath;
        static string Apppath;
        static ArrayList PredefinedKeywords= new ArrayList();
        static ArrayList MostUsedEnglishWords = new ArrayList();
        static ArrayList city = new ArrayList();
        ArrayList SelectedFiles= new ArrayList();
        static Array citylist;
        String[] selectedFilesInFolder = { };
        bool FolderSelected = false;
        bool FileSelected = false;
        bool CompletedSuccessFully = false;
        /// <summary>
        /// Initialize application UI Components
        /// </summary>
        public frm_ResumeUploader()
        {
            InitializeComponent();                 
            Winword = new Microsoft.Office.Interop.Word.Application();
            progressBar_Conversion.Visible = false;
        }
           
       
        /*function */
        public bool IsBusy
        {
            get { return _conversionIsRunning; }
        }
        /// <summary>
        /// To select the files to be converted.
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void btnBrowse_Click(object sender, EventArgs e)
        {
            SelectedFiles.Clear();
            if(!FolderSelected)
            txtSource.Text = "";
            if (SelectFilesDialog.ShowDialog() == DialogResult.OK)
            {              
                foreach(string file in SelectFilesDialog.FileNames)
                {
                    txtSource.Text = txtSource.Text + file;
                }
                FileSelected = true;
            }

        }
        /// <summary>
        /// To select destination file ie name of the csv file to be generated
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void btnSave_Click(object sender, EventArgs e)
        {
            
            SaveFileDialog CsvSaveFileDialog = new SaveFileDialog();
            CsvSaveFileDialog.Filter = "Csv files (*.csv)|*.csv";
            if (CsvSaveFileDialog.ShowDialog() == DialogResult.OK)
            {
                txtDestination.Text = CsvSaveFileDialog.FileName;
            }            

        }
        /// <summary>
        /// To start extraction of the relavant fields in resume
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void btnConvert_Click(object sender, EventArgs e)
        {
          
          
            try
            {               
                if (FolderSelected == true)
                {
                    if (chk_ConvertSubdiretories.Checked == true)
                    {
                        selectedFilesInFolder = System.IO.Directory.GetFiles(SelectFolderDialog.SelectedPath, "*.doc",SearchOption.AllDirectories);
                    }
                    else
                    {
                        selectedFilesInFolder = System.IO.Directory.GetFiles(SelectFolderDialog.SelectedPath, "*.doc",SearchOption.TopDirectoryOnly);
                    }
                    foreach (String file in selectedFilesInFolder)
                    {
                        if (!file.Contains('~'))
                        {
                            SelectedFiles.Add(file);
                        }
                    }
                }
                if (FileSelected == true)
                {
                    foreach (String file in SelectFilesDialog.FileNames)
                    {
                        SelectedFiles.Add(file);

                    }
                }
                progressBar_Conversion.Value = 0;
                SaveFileDialog saveFileDialog1 = new SaveFileDialog();
                if ((txtSource.Text == "") && (txtDestination.Text == ""))
                {
                    MessageBox.Show(ApplicationStrings.SelectBoth, ApplicationStrings.ApplicationName, MessageBoxButtons.OK, MessageBoxIcon.Warning);
                }
                else if (txtSource.Text == "")
                {
                    MessageBox.Show(ApplicationStrings.SelectSourceFile, ApplicationStrings.ApplicationName, MessageBoxButtons.OK, MessageBoxIcon.Warning);
                }
                else if (txtDestination.Text == "")
                {

                    MessageBox.Show(ApplicationStrings.SelectDestinationFile, ApplicationStrings.ApplicationName, MessageBoxButtons.OK, MessageBoxIcon.Warning);
                }

                else
                {
                    if (backgroundWorker_convertcsv.IsBusy != true)
                    {
                        progressBar_Conversion.Visible = true;
                        lbl_progress.Visible = true;
                        progressBar_Conversion.Value = 5;
                        this.backgroundWorker_convertcsv.RunWorkerAsync();
                    }
                }
            }
            catch (Exception exp)
            {
                MessageBox.Show("error" + exp, ApplicationStrings.ApplicationName, MessageBoxButtons.OK, MessageBoxIcon.Error);
            }


        }
        /// <summary>
        /// back ground worker works background 
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void backgroundWorker_convertcsv_DoWork(object sender, DoWorkEventArgs e)
        {
            
            // Get the BackgroundWorker that raised this event.
            BackgroundWorker worker = sender as BackgroundWorker;
            if (worker.CancellationPending == true)
            {
                e.Cancel = true;
                
            }
            else
            {
                   CompletedSuccessFully= al.ParseFiles(worker, e, SelectedFiles, Temppath, SelectedFiles[0].ToString(), txtDestination.Text,
                   PredefinedKeywords, city, gender,Winword);
                   
            }
            if (worker.IsBusy == true)
            {
                System.Windows.Forms.Application.DoEvents();
            }
        }
        // This event handler updates the progress bar.
        /// <summary>
        /// call back called to update ui , reports the progress change event
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void backgroundWorker_convertcsv_ProgressChanged(object sender,
            ProgressChangedEventArgs e)
        {
            this.progressBar_Conversion.Value = e.ProgressPercentage;
            this.lbl_progress.Text = e.UserState.ToString();
            System.Windows.Forms.Application.DoEvents();
        }
        
        /// <summary>
        /// This event handler deals with the results of the
        /// background operation.
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void backgroundWorker_convertcsv_RunWorkerCompleted(
            object sender, RunWorkerCompletedEventArgs e)
        {
            if (e.Cancelled)
            {
                // Next, handle the case where the user canceled 
                // the operation.
                // Note that due to a race condition in 
                // the DoWork event handler, the Cancelled
                // flag may not have been set, even though
                // CancelAsync was called.
                lbl_progress.Text = "Canceled";
            }
            if (CompletedSuccessFully == true)
            {
                progressBar_Conversion.Value = 100;
               //launch the folder after the zip file is created
                string argument = @"/select, " + txtDestination.Text;
                
                System.Diagnostics.Process.Start("explorer.exe", argument);
                progressBar_Conversion.Visible = false;
                progressBar_Conversion.Value = 0;
                lbl_progress.Visible = false;
            }
            else
            {
                progressBar_Conversion.Value = 0;
            }
            
            System.Windows.Forms.Application.DoEvents();
            SelectedFiles.Clear();
            FileSelected = false;
            FolderSelected = false;
            txtSource.Text = "";
            txtDestination.Text = "";
          
        }
       
       /// <summary>
       /// To Initialize application variables and arrays
       /// </summary>
       /// <param name="sender"></param>
       /// <param name="e"></param>
        private void ResumeUploader_Load(object sender, EventArgs e)
        {
            //to check whether files we use are available 
            // and to initialize the contents of the files to the array list we use
            InitializeApplicationVariables();
        }
       /// <summary>
       /// to check whether files we use are available 
       /// and to initialize the contents of the files to the array list we use
       /// </summary>
        public static void InitializeApplicationVariables()
        {
            if (gender.Count > 0)
            gender.Clear();
            if(PredefinedKeywords!=null)
            PredefinedKeywords.Clear();
            if (MostUsedEnglishWords!=null)
            MostUsedEnglishWords.Clear();
           
            gender.Add("male");
            gender.Add("female");
            
            bool init = al.InitApplication(ref Apppath, ref Temppath,ref city,ref PredefinedKeywords,ref MostUsedEnglishWords );
            citylist = city.ToArray();
            if (!init)
            {
                MessageBox.Show(ApplicationStrings.ApplicationInitializeError, ApplicationStrings.ApplicationName, MessageBoxButtons.OK, MessageBoxIcon.Information);
                System.Windows.Forms.Application.Exit();                               
            }
        }
        
      /// <summary>
      /// To cancel the conversion
      /// </summary>
      /// <param name="sender"></param>
      /// <param name="e"></param>
        private void btn_Cancel_Click(object sender, EventArgs e)
        {
            if (backgroundWorker_convertcsv.WorkerSupportsCancellation == true)
            {
                // Cancel the asynchronous operation.
                this.backgroundWorker_convertcsv.CancelAsync();
                this.backgroundWorker_convertcsv.Dispose();
                         
            }
        }
        /// <summary>
        ///  To show Add keywords window to add new keywords 
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void optionsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            AddKeywords ak = new AddKeywords();
            ak.ShowDialog();
        }
        /// <summary>
        /// To show Help Menu 
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void helpToolStripMenuItem_Click(object sender, EventArgs e)
        {
            // open text file in notepad (or another default text editor)
            Help help = new Help();
            help.ShowDialog();
           // string helpfile=Apppath + "\\Help\\Help.txt";
            //System.Diagnostics.Process.Start(@helpfile);
        }
        /// <summary>
        /// To select a folder to be extrated
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void btn_SelectFolder_Click(object sender, EventArgs e)
        {
            SelectedFiles.Clear();
            if(!FileSelected)
            txtSource.Text = "";
            if (SelectFolderDialog.ShowDialog() == DialogResult.OK)
            {
                FolderSelected = true;
                txtSource.Text = txtSource.Text + SelectFolderDialog.SelectedPath;
            }

           
        }
        /// <summary>
        /// Close event when a form is closed, wuiting the 
        /// </summary>
        /// <param name="sender">
        /// 
        /// </param>
        /// <param name="e"></param>
        private void ResumeUploader_FormClosing(object sender, FormClosingEventArgs e)
        {         
            object saveChanges=true;
            object falseobject = false;
            Winword.Quit(ref saveChanges, ref falseobject, ref falseobject);          
        }

               
    }

}





