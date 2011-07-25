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
    public partial class AddKeywords : Form
    {
        ApplicationLogic al = new ApplicationLogic();
        public AddKeywords()
        {
            InitializeComponent();
        }

        private void btn_AddKeyword_Click(object sender, EventArgs e)
        {
            try
            {
                if (txt_EnglishWords.Text.Length == 0 && txt_NewKeyword.Text.Length == 0)
                {
                    MessageBox.Show("Keywords are Empty", ApplicationStrings.ApplicationName, MessageBoxButtons.OK, MessageBoxIcon.Information);
                    return;
                }
                
                al.AddKeyword(txt_NewKeyword.Text.ToString());
                al.AddEnglishWords(txt_EnglishWords.Text.ToString());
                MessageBox.Show("Keyword added successfully,restart application to take affect", ApplicationStrings.ApplicationName, MessageBoxButtons.OK, MessageBoxIcon.Information);
                
            }
            catch (Exception exp)
            {
                MessageBox.Show("Exception in adding keyword" + exp.Message, ApplicationStrings.ApplicationName, MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
        private void Addkeywords_FormClosing(object sender, FormClosingEventArgs e)
        {
            frm_ResumeUploader.InitializeApplicationVariables();
        }
    }
}
