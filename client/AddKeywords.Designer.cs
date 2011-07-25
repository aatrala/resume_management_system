namespace ResumeUploader
{
    partial class AddKeywords
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
            this.txt_NewKeyword = new System.Windows.Forms.TextBox();
            this.lbl_NewKeyWord = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.txt_EnglishWords = new System.Windows.Forms.TextBox();
            this.lbl_englishtip = new System.Windows.Forms.Label();
            this.lbl_keywordstip = new System.Windows.Forms.Label();
            this.btn_AddKeyword = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // txt_NewKeyword
            // 
            this.txt_NewKeyword.Location = new System.Drawing.Point(161, 12);
            this.txt_NewKeyword.Multiline = true;
            this.txt_NewKeyword.Name = "txt_NewKeyword";
            this.txt_NewKeyword.Size = new System.Drawing.Size(224, 73);
            this.txt_NewKeyword.TabIndex = 0;
            // 
            // lbl_NewKeyWord
            // 
            this.lbl_NewKeyWord.AutoSize = true;
            this.lbl_NewKeyWord.Location = new System.Drawing.Point(26, 47);
            this.lbl_NewKeyWord.Name = "lbl_NewKeyWord";
            this.lbl_NewKeyWord.Size = new System.Drawing.Size(78, 13);
            this.lbl_NewKeyWord.TabIndex = 1;
            this.lbl_NewKeyWord.Text = "New Keywords";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(26, 138);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(100, 13);
            this.label1.TabIndex = 3;
            this.label1.Text = "New English Words";
            // 
            // txt_EnglishWords
            // 
            this.txt_EnglishWords.Location = new System.Drawing.Point(161, 114);
            this.txt_EnglishWords.Multiline = true;
            this.txt_EnglishWords.Name = "txt_EnglishWords";
            this.txt_EnglishWords.Size = new System.Drawing.Size(224, 70);
            this.txt_EnglishWords.TabIndex = 4;
            // 
            // lbl_englishtip
            // 
            this.lbl_englishtip.AutoSize = true;
            this.lbl_englishtip.Location = new System.Drawing.Point(158, 187);
            this.lbl_englishtip.Name = "lbl_englishtip";
            this.lbl_englishtip.Size = new System.Drawing.Size(218, 13);
            this.lbl_englishtip.TabIndex = 5;
            this.lbl_englishtip.Text = "(Enter more words with separated by comma)";
            // 
            // lbl_keywordstip
            // 
            this.lbl_keywordstip.AutoSize = true;
            this.lbl_keywordstip.Location = new System.Drawing.Point(158, 88);
            this.lbl_keywordstip.Name = "lbl_keywordstip";
            this.lbl_keywordstip.Size = new System.Drawing.Size(218, 13);
            this.lbl_keywordstip.TabIndex = 6;
            this.lbl_keywordstip.Text = "(Enter more words with separated by comma)";
            // 
            // btn_AddKeyword
            // 
            this.btn_AddKeyword.BackgroundImage = global::ResumeUploader.Properties.Resources.button_black;
            this.btn_AddKeyword.ForeColor = System.Drawing.Color.White;
            this.btn_AddKeyword.Location = new System.Drawing.Point(134, 211);
            this.btn_AddKeyword.Name = "btn_AddKeyword";
            this.btn_AddKeyword.Size = new System.Drawing.Size(84, 34);
            this.btn_AddKeyword.TabIndex = 2;
            this.btn_AddKeyword.Text = "Add";
            this.btn_AddKeyword.UseVisualStyleBackColor = true;
            this.btn_AddKeyword.Click += new System.EventHandler(this.btn_AddKeyword_Click);
            // 
            // AddKeywords
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.AliceBlue;
            this.ClientSize = new System.Drawing.Size(476, 257);
            this.Controls.Add(this.lbl_keywordstip);
            this.Controls.Add(this.lbl_englishtip);
            this.Controls.Add(this.txt_EnglishWords);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btn_AddKeyword);
            this.Controls.Add(this.lbl_NewKeyWord);
            this.Controls.Add(this.txt_NewKeyword);
            this.Name = "AddKeywords";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterParent;
            this.Text = "AddKeywords";
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.Addkeywords_FormClosing);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.TextBox txt_NewKeyword;
        private System.Windows.Forms.Label lbl_NewKeyWord;
        private System.Windows.Forms.Button btn_AddKeyword;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txt_EnglishWords;
        private System.Windows.Forms.Label lbl_englishtip;
        private System.Windows.Forms.Label lbl_keywordstip;
    }
}