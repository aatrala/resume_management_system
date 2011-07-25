using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace ResumeUploader
{
    public partial class Help : Form
    {
        public Help()
        {
            InitializeComponent();
        }
        /// <summary>
        /// To change form components and settings at loading time
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void Help_Load(object sender, EventArgs e)
        {
            lbl_SelectFilesContent.Text = "This option allows to select single or multiple resumes to be " +
                                          "\nconverted.\"Resume Uploader\" reads the files and get " +
                                          "\ninformations like Name,Contact Number, Location(well " +
                                          "\nknown cities),Skill sets,Experience details, Email -ID " +
                                          "\nfrom file  and stores in a new file and create an "+
                                          "\nArchieve of selected files.These new file is created in " +
                                          "\nthe output folder choosen by the user.Email - ID and Contact "+
                                          "\nNumber are removed from the resume (This does not affect "+
                                          "\nsource files chosen by user)";
            lbl_SelectFolderContent.Text = "This option allows to select a folder of resumes to be converted." +
                                           "\n\"Resume Uploader\" reads the files and get the informations " +
                                           "\nlike Name , Contact details Skill sets,Location,Experience " +
                                           "\ndetials, from resumes and writes in a new file Also creates"+
                                           "\nAlso creates Archieve of files.By defualt \"Resume Uploader\"" +
                                           "\nfiles in subfolders to read files in subfolders select the check box " +
                                           "\n will not convert\" Also convert files in subdirectories\". " +
                                           "\nThis option is applicable only a folder of resumes is selected ";

                lbl_KeywordsContent.Text = "This option opens a \"AddKeywords\" window.In AddKeywords window " +
                                           "\nEnter a Keyword (i.e)Skill set to be searched from the resume." +
                                           "\nThese new keywords are added with the predefined keywords and " +
                                           "\nwill be used in future conversions. English words are used to "+
                                           "\nprevent common english words added as keywords.By defualt " +
                                           "\napplication searches Predefined Skill sets if no words are " +
                                           "\nfound then filters the common english words from resume and " +
                                           "\nadded as keyword.\"Resume Uploader\" finds the Predefined "+
                                           "\nskillsets in resume if application is not able find the skill " +
                                           "\nset then adds all non-most common words in resume as keyword.";


                lbl_OutputContent.Text = "Name of the output file which stores Informations like Name,Contact " +
                                         "\nInfomations,Skill set,Experience details from Resumes. and Creates " +
                                         "\na Zip file with the same name and same location.";
                lbl_UsageContent.Text = "This is clinet tool to upload more resumes to mapastaffing.com." +
                                        "\nThis application creates file with \"csv\" extension which  " +
                                        "\nstored all the details needed by MapaStaffing.com Consultants user " +
                                        "\nThese information are useful in searching resumes.\n \t\t To read the " +
                                        "key fields like Name,Email-id , Contact Number,Experience details," +
                                        "\nSkill sets from resumes select the files using \"Select Files\" " +
                                        "\nbutton here we can choose multiple or single file.To select the " +
                                        "\nfolder contains large number of resumes use the \"Select Folder\" button." +
                                        "\nThis option will not include the subfolders. To search in subfolders " +
                                        "\nselect the check box \"Also convert files in subfolders\".To save " +
                                        "\nthe output files select save button and enter output file name." +
                                        "\nIn the same location a zip file also created with same file name." +
                                        "\nThis zip file contains the resumes selected.Upload these two files " +
                                        "\nin mapastaffing.com BulkUploadpage";

        }

       
       
    }
}
