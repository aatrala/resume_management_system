namespace ResumeUploader
{
    partial class frm_ResumeUploader
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
            
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frm_ResumeUploader));
            this.SelectFilesDialog = new System.Windows.Forms.OpenFileDialog();
            this.CSVSaveFileDialog = new System.Windows.Forms.SaveFileDialog();
            this.SelectFolderDialog = new System.Windows.Forms.FolderBrowserDialog();
            this.backgroundWorker_convertcsv = new System.ComponentModel.BackgroundWorker();
            this.optionsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.mainmenu_Csv = new System.Windows.Forms.MenuStrip();
            this.helpToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.txtSource = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.txtDestination = new System.Windows.Forms.TextBox();
            this.progressBar_Conversion = new System.Windows.Forms.ProgressBar();
            this.lbl_progress = new System.Windows.Forms.Label();
            this.chk_ConvertSubdiretories = new System.Windows.Forms.CheckBox();
            this.btn_SelectFolder = new System.Windows.Forms.Button();
            this.btnConvert = new System.Windows.Forms.Button();
            this.btnSave = new System.Windows.Forms.Button();
            this.btnBrowse = new System.Windows.Forms.Button();
            this.mainmenu_Csv.SuspendLayout();
            this.SuspendLayout();
            // 
            // SelectFilesDialog
            // 
            this.SelectFilesDialog.Filter = " \"Doc files (*.doc)|*.doc|All files (*.*)|*.*\"";
            this.SelectFilesDialog.InitialDirectory = "Desktop";
            this.SelectFilesDialog.Multiselect = true;
            // 
            // CSVSaveFileDialog
            // 
            this.CSVSaveFileDialog.InitialDirectory = "Desktop";
            this.CSVSaveFileDialog.RestoreDirectory = true;
            // 
            // backgroundWorker_convertcsv
            // 
            this.backgroundWorker_convertcsv.WorkerReportsProgress = true;
            this.backgroundWorker_convertcsv.WorkerSupportsCancellation = true;
            this.backgroundWorker_convertcsv.DoWork += new System.ComponentModel.DoWorkEventHandler(this.backgroundWorker_convertcsv_DoWork);
            this.backgroundWorker_convertcsv.RunWorkerCompleted += new System.ComponentModel.RunWorkerCompletedEventHandler(this.backgroundWorker_convertcsv_RunWorkerCompleted);
            this.backgroundWorker_convertcsv.ProgressChanged += new System.ComponentModel.ProgressChangedEventHandler(this.backgroundWorker_convertcsv_ProgressChanged);
            // 
            // optionsToolStripMenuItem
            // 
            this.optionsToolStripMenuItem.ForeColor = System.Drawing.Color.White;
            this.optionsToolStripMenuItem.Name = "optionsToolStripMenuItem";
            this.optionsToolStripMenuItem.Size = new System.Drawing.Size(92, 20);
            this.optionsToolStripMenuItem.Text = "AddKeywords";
            this.optionsToolStripMenuItem.Click += new System.EventHandler(this.optionsToolStripMenuItem_Click);
            // 
            // mainmenu_Csv
            // 
            this.mainmenu_Csv.BackColor = System.Drawing.Color.Black;
            this.mainmenu_Csv.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.optionsToolStripMenuItem,
            this.helpToolStripMenuItem});
            this.mainmenu_Csv.Location = new System.Drawing.Point(0, 0);
            this.mainmenu_Csv.Name = "mainmenu_Csv";
            this.mainmenu_Csv.Size = new System.Drawing.Size(539, 24);
            this.mainmenu_Csv.TabIndex = 14;
            this.mainmenu_Csv.Text = "mainmenu_Csv";
            // 
            // helpToolStripMenuItem
            // 
            this.helpToolStripMenuItem.ForeColor = System.Drawing.Color.White;
            this.helpToolStripMenuItem.Name = "helpToolStripMenuItem";
            this.helpToolStripMenuItem.Size = new System.Drawing.Size(44, 20);
            this.helpToolStripMenuItem.Text = "Help";
            this.helpToolStripMenuItem.Click += new System.EventHandler(this.helpToolStripMenuItem_Click);
            // 
            // txtSource
            // 
            this.txtSource.Location = new System.Drawing.Point(95, 48);
            this.txtSource.Name = "txtSource";
            this.txtSource.Size = new System.Drawing.Size(182, 20);
            this.txtSource.TabIndex = 3;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Transparent;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(23, 51);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(54, 13);
            this.label1.TabIndex = 5;
            this.label1.Text = "Resumes ";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(23, 124);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(39, 13);
            this.label2.TabIndex = 6;
            this.label2.Text = "Output";
            // 
            // txtDestination
            // 
            this.txtDestination.Location = new System.Drawing.Point(93, 120);
            this.txtDestination.Name = "txtDestination";
            this.txtDestination.Size = new System.Drawing.Size(182, 20);
            this.txtDestination.TabIndex = 7;
            // 
            // progressBar_Conversion
            // 
            this.progressBar_Conversion.Location = new System.Drawing.Point(26, 228);
            this.progressBar_Conversion.Name = "progressBar_Conversion";
            this.progressBar_Conversion.Size = new System.Drawing.Size(363, 24);
            this.progressBar_Conversion.TabIndex = 10;
            // 
            // lbl_progress
            // 
            this.lbl_progress.AutoSize = true;
            this.lbl_progress.Location = new System.Drawing.Point(23, 208);
            this.lbl_progress.Name = "lbl_progress";
            this.lbl_progress.Size = new System.Drawing.Size(0, 13);
            this.lbl_progress.TabIndex = 11;
            // 
            // chk_ConvertSubdiretories
            // 
            this.chk_ConvertSubdiretories.AutoSize = true;
            this.chk_ConvertSubdiretories.Location = new System.Drawing.Point(95, 73);
            this.chk_ConvertSubdiretories.Name = "chk_ConvertSubdiretories";
            this.chk_ConvertSubdiretories.Size = new System.Drawing.Size(185, 17);
            this.chk_ConvertSubdiretories.TabIndex = 15;
            this.chk_ConvertSubdiretories.Text = "Also convert files in subdirectories";
            this.chk_ConvertSubdiretories.UseVisualStyleBackColor = true;
            // 
            // btn_SelectFolder
            // 
            this.btn_SelectFolder.BackColor = System.Drawing.Color.AliceBlue;
            this.btn_SelectFolder.BackgroundImage = global::ResumeUploader.Properties.Resources.button_black;
            this.btn_SelectFolder.ForeColor = System.Drawing.Color.White;
            this.btn_SelectFolder.Location = new System.Drawing.Point(411, 43);
            this.btn_SelectFolder.Name = "btn_SelectFolder";
            this.btn_SelectFolder.Size = new System.Drawing.Size(86, 35);
            this.btn_SelectFolder.TabIndex = 16;
            this.btn_SelectFolder.Text = "Select Folder";
            this.btn_SelectFolder.UseVisualStyleBackColor = false;
            this.btn_SelectFolder.Click += new System.EventHandler(this.btn_SelectFolder_Click);
            // 
            // btnConvert
            // 
            this.btnConvert.BackgroundImage = global::ResumeUploader.Properties.Resources.button_black;
            this.btnConvert.ForeColor = System.Drawing.Color.White;
            this.btnConvert.Location = new System.Drawing.Point(154, 161);
            this.btnConvert.Name = "btnConvert";
            this.btnConvert.Size = new System.Drawing.Size(86, 35);
            this.btnConvert.TabIndex = 9;
            this.btnConvert.Text = "Convert\r\n";
            this.btnConvert.UseVisualStyleBackColor = true;
            this.btnConvert.Click += new System.EventHandler(this.btnConvert_Click);
            // 
            // btnSave
            // 
            this.btnSave.BackgroundImage = global::ResumeUploader.Properties.Resources.button_black;
            this.btnSave.ForeColor = System.Drawing.Color.White;
            this.btnSave.Location = new System.Drawing.Point(304, 113);
            this.btnSave.Name = "btnSave";
            this.btnSave.Size = new System.Drawing.Size(86, 35);
            this.btnSave.TabIndex = 8;
            this.btnSave.Text = "Save\n";
            this.btnSave.UseVisualStyleBackColor = true;
            this.btnSave.Click += new System.EventHandler(this.btnSave_Click);
            // 
            // btnBrowse
            // 
            this.btnBrowse.BackColor = System.Drawing.Color.AliceBlue;
            this.btnBrowse.BackgroundImage = global::ResumeUploader.Properties.Resources.button_black;
            this.btnBrowse.ForeColor = System.Drawing.Color.White;
            this.btnBrowse.Location = new System.Drawing.Point(303, 43);
            this.btnBrowse.Name = "btnBrowse";
            this.btnBrowse.Size = new System.Drawing.Size(86, 35);
            this.btnBrowse.TabIndex = 4;
            this.btnBrowse.Text = "Select File";
            this.btnBrowse.UseVisualStyleBackColor = false;
            this.btnBrowse.Click += new System.EventHandler(this.btnBrowse_Click);
            // 
            // frm_ResumeUploader
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.AliceBlue;
            this.ClientSize = new System.Drawing.Size(539, 258);
            this.Controls.Add(this.btn_SelectFolder);
            this.Controls.Add(this.chk_ConvertSubdiretories);
            this.Controls.Add(this.lbl_progress);
            this.Controls.Add(this.progressBar_Conversion);
            this.Controls.Add(this.btnConvert);
            this.Controls.Add(this.btnSave);
            this.Controls.Add(this.txtDestination);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnBrowse);
            this.Controls.Add(this.txtSource);
            this.Controls.Add(this.mainmenu_Csv);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MainMenuStrip = this.mainmenu_Csv;
            this.Name = "frm_ResumeUploader";
            this.Text = "Resume Uploader";
            this.Load += new System.EventHandler(this.ResumeUploader_Load);
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.ResumeUploader_FormClosing);
            this.mainmenu_Csv.ResumeLayout(false);
            this.mainmenu_Csv.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.OpenFileDialog SelectFilesDialog;
        private System.Windows.Forms.SaveFileDialog CSVSaveFileDialog;
        private System.Windows.Forms.FolderBrowserDialog SelectFolderDialog;
        private System.ComponentModel.BackgroundWorker backgroundWorker_convertcsv;
        private System.Windows.Forms.ToolStripMenuItem optionsToolStripMenuItem;
        private System.Windows.Forms.MenuStrip mainmenu_Csv;
        private System.Windows.Forms.ToolStripMenuItem helpToolStripMenuItem;
        private System.Windows.Forms.TextBox txtSource;
        private System.Windows.Forms.Button btnBrowse;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtDestination;
        private System.Windows.Forms.Button btnSave;
        private System.Windows.Forms.Button btnConvert;
        private System.Windows.Forms.ProgressBar progressBar_Conversion;
        private System.Windows.Forms.Label lbl_progress;
        private System.Windows.Forms.CheckBox chk_ConvertSubdiretories;
        private System.Windows.Forms.Button btn_SelectFolder;

    }
}

