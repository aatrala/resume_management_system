using System;
using System.Collections.Generic;
using System.Configuration;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.IO;
using System.Text.RegularExpressions;
using System.Collections;
using System.Runtime;
using Microsoft.Office.Interop.Word;
using System.Runtime.InteropServices.ComTypes;
using Ionic.Zip;
using System.Threading;

namespace ResumeUploader
{
    class ApplicationLogic
    {
        String CitiesLocation = "";
        String KeywordsLocation = "";
        Application ap;
        ArrayList MostUsedEnglishWords = new ArrayList();
        String NewKeywordsLocation = "";
        String EnglishWordsLocation = "";
        public ApplicationLogic()
        {
            String Apppath;
            Apppath = Environment.GetCommandLineArgs()[0];
            Apppath = Path.GetDirectoryName(Apppath);
            CitiesLocation = Apppath + "\\Libs\\cities.txt";
            //keywordslocation = Apppath + "\\Libs\\keywords.txt";
            KeywordsLocation = Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData).ToString() +
                             "\\" + ApplicationStrings.ApplicationName + "\\keywords.txt";
            NewKeywordsLocation = Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData).ToString() +
                          "\\"+ApplicationStrings.ApplicationName+"\\newKeywords.txt";
            EnglishWordsLocation = Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData).ToString() +
                             "\\" + ApplicationStrings.ApplicationName + "\\newEnglishWords.txt";
        
        }
        ~ApplicationLogic()
        {
              
        }
        /// <summary>
        /// Initialize application variables 
        /// </summary>
        /// <param name="Apppath">
        /// Application installed path (returns to the calling function)
        /// </param>
        /// <param name="TempPath">
        /// System temporary folder path (returns to the calling function)
        /// </param>
        /// <param name="CityList">
        /// List of Predefined Cities (returns to the calling function)
        /// </param>
        /// <param name="KeywordsList">
        /// List of Predefined Kewords (returns to the calling function)
        /// </param>
        /// <param name="EnglishWordsList">
        /// LIst of English words (returns to the calling function)
        /// </param>
        /// <returns>
        /// Returns to true if all the details are read from file and false when any error occurs
        /// </returns>
        public bool InitApplication(ref String Apppath,ref String TempPath,ref ArrayList CityList,ref ArrayList KeywordsList,ref ArrayList EnglishWordsList)
        {
           
            try
            {
                Apppath = Environment.GetCommandLineArgs()[0];
                TempPath = System.IO.Path.GetTempPath();
                Apppath = Path.GetDirectoryName(Apppath);
                CitiesLocation = Apppath + "\\Libs\\cities.txt";
                //keywordslocation = Apppath + "\\Libs\\keywords.txt";
                KeywordsLocation = Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData).ToString() +
                              "\\" + ApplicationStrings.ApplicationName + "\\keywords.txt";
                
                NewKeywordsLocation = Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData).ToString()+
                              "\\"+ApplicationStrings.ApplicationName+"\\newKeywords.txt";
                EnglishWordsLocation = Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData).ToString() +
                             "\\" + ApplicationStrings.ApplicationName + "\\newEnglishWords.txt";
        
                //System.Windows.Forms.MessageBox.Show("app path"+Apppath, "Csv Generator",System.Windows.Forms.MessageBoxButtons.OK,System.Windows.Forms.MessageBoxIcon.Information);
                CityList = GetCities();
                CityList.RemoveAt(CityList.Count - 1);
                KeywordsList = GetKeywords();
                EnglishWordsList=GetMostCommonEnglishWords();

                MostUsedEnglishWords = EnglishWordsList;
                //createstaticArray();
                
            }
            catch(Exception e)
            {
                Apppath = "";
                return false;
            }
            
            return true;
        }
        /// <summary>
        /// Reads predefined cities from file
        /// </summary>
        /// <returns>
        /// Returns the list of cities
        /// </returns>
        public ArrayList GetCities()
        {
            ArrayList cityList = new ArrayList();
            try
            {
                using (StreamReader csr = new StreamReader(CitiesLocation))
                {
                    while ((!csr.EndOfStream))
                    {

                        int c = csr.Peek();

                        while (c != -1 && Char.IsWhiteSpace(Convert.ToChar(c)))
                        {
                            csr.Read(); c = csr.Peek();
                        }
                        StringBuilder city = new StringBuilder();
                        while (c != -1 && !Char.IsWhiteSpace(Convert.ToChar(c)))
                        {
                            city.Append(Convert.ToChar(c)); csr.Read(); c = csr.Peek();
                        }

                        if (city.ToString() != "" || city.ToString() != null)
                            cityList.Add(city.ToString().ToLower());


                    }
                    
                }
            }
            catch (Exception e)
            { }
            return cityList;
           
        }
        /// <summary>
        /// To read keywords from file
        /// </summary>
        /// <returns>
        /// returns list of keywords from file
        /// </returns>
        public ArrayList GetKeywords()
        {
            ArrayList keywords = new ArrayList();
            try
            {
                using (StreamReader csr = new StreamReader(KeywordsLocation))
                {
                    while ((!csr.EndOfStream))
                    {

                        int c = csr.Peek();

                        while (c != -1 && Char.IsWhiteSpace(Convert.ToChar(c)))
                        {
                            csr.Read(); c = csr.Peek();
                        }
                        StringBuilder keyword = new StringBuilder();
                        while (c != -1 && !Char.IsWhiteSpace(Convert.ToChar(c)))
                        {
                            keyword.Append(Convert.ToChar(c)); csr.Read(); c = csr.Peek();
                        }

                        if (keyword.ToString() != "" || keyword.ToString() != null)
                            keywords.Add(keyword.ToString().ToLower());


                    }

                }
              
            }
            catch (Exception e)
            { }
            return keywords;

        }
        /// <summary>
        ///  Removes selected words from file
        /// </summary>
        /// <param name="FileName">
        /// Name of the file to be removed
        /// </param>
        /// <param name="RemoveWordList">
        /// List of words to be removed from the file
        /// </param>
        public void RemoveDetails(object FileName, ArrayList RemoveWordList)
        {
            object replaceAll = Microsoft.Office.Interop.Word.WdReplace.wdReplaceAll;
            
            object missing = System.Reflection.Missing.Value;
            try
            {
                for (int i = 0; i < RemoveWordList.Count; i++)
                {

                    ap.Documents.Open(ref FileName,
                   ref missing, ref missing, ref missing, ref missing, ref missing,
                   ref missing, ref missing, ref missing, ref missing, ref missing,
                   ref missing, ref missing, ref missing, ref missing, ref missing);

                    ap.Selection.Find.ClearFormatting();

                    ap.Selection.Find.Text = RemoveWordList[i].ToString();

                    ap.Selection.Find.Replacement.ClearFormatting();
                    ap.Selection.Find.Replacement.Text = "      ";

                    ap.Selection.Find.Execute(
                        ref missing, ref missing, ref missing, ref missing, ref missing,
                        ref missing, ref missing, ref missing, ref missing, ref missing,
                        ref replaceAll, ref missing, ref missing, ref missing, ref missing);

                    object doSaveChanges = Microsoft.Office.Interop.Word.WdSaveOptions.wdSaveChanges;
                    Microsoft.Office.Interop.Word.DocumentClass doc = ap.Documents.get_Item(ref FileName) as Microsoft.Office.Interop.Word.DocumentClass;

                    doc.Close(ref doSaveChanges, ref missing, ref missing);

                }
            }
            catch (Exception e)
            { }

        }
       /// <summary>
       /// Creates the zip archieve in the destination folder
       /// </summary>
       /// <param name="SourceDirectory">
       /// Complete folder path of the files to be zipped
       /// </param>
       /// <param name="ZipFileToCreate">
       /// Name of the file archieve to be created
       /// </param>
       /// <returns></returns>
        public bool CreateZip(String SourceDirectory, String ZipFileToCreate)
        {
            try
            {
                using (ZipFile zip = new ZipFile())
                {
                    // note: this does not recurse directories! 
                    String[] filenames = System.IO.Directory.GetFiles(SourceDirectory);

                    // This is just a sample, provided to illustrate the DotNetZip interface.  
                    // This logic does not recurse through sub-directories.
                    // If you are zipping up a directory, you may want to see the AddDirectory() method, 
                    // which operates recursively. 
                    foreach (String filename in filenames)
                    {
                        Console.WriteLine("Adding {0}...", filename);
                        ZipEntry e = zip.AddFile(filename);
                        e.Comment = "created for mapastaffing upload.";
                    }

                    zip.Comment = String.Format("This zip archive was created on machine '{0}'",
                       System.Net.Dns.GetHostName());

                    zip.Save(ZipFileToCreate);
                  
                }

            }
            catch (System.Exception ex1)
            {
                System.Console.Error.WriteLine("exception: " + ex1);
                return false;
            }
            return true;
        }
        /// <summary>
        /// Creates the zip archieve in the destination folder
        /// </summary>
        /// <param name="filenames">
        /// List of files to be created
        /// </param>
        /// <param name="ZipFileToCreate">
        /// Name of the file archieve to be created
        /// </param>
        /// <returns>
        /// returns true when file is successfully created and false when any error occurs
        /// </returns>
        public bool CreateZip_usingFiles(string[] filenames, String ZipFileToCreate)
        {
            try
            {
                string folderInZip = Path.GetFileNameWithoutExtension(ZipFileToCreate);
                using (ZipFile zip = new ZipFile())
                {
                    // note: this does not recurse directories! 
                  

                    // This is just a sample, provided to illustrate the DotNetZip interface.  
                    // This logic does not recurse through sub-directories.
                    // If you are zipping up a directory, you may want to see the AddDirectory() method, 
                    // which operates recursively. 


                    foreach (String filename in filenames)
                    {
                        Console.WriteLine("Adding {0}...", filename);
                        ZipEntry e = zip.AddFile(filename, folderInZip);

                        
                        e.Comment = "created for mapastaffing upload.";
                    }
                    zip.Comment = String.Format("This zip archive was created on machine '{0}'",
                       System.Net.Dns.GetHostName());

                    zip.Save(ZipFileToCreate);
                    
                    
                }

            }
            catch (System.Exception ex1)
            {
                System.Console.Error.WriteLine("exception: " + ex1);
                return false;
            }
            return true;
        }
        /// <summary>
        ///  Removes charecter like . , : in given string
        /// </summary>
        /// <param name="buffer">
        /// String to be formatted
        /// </param>
        /// <returns>
        /// returns the formatted string
        /// </returns>
        public String FormatString(String buffer)
        {
            String formattedString="";
            try
            {
                if (buffer.ToString().IndexOf("(") > 0)
                {
                    formattedString = buffer.ToString().Remove(buffer.ToString().IndexOf("(")-1);

                }
                else if (buffer.ToString().IndexOf(",") > 0)
                {
                    formattedString = buffer.ToString().Remove(buffer.ToString().IndexOf(",")-1);

                }
                else if (buffer.ToString().IndexOf(":") > 0)
                {
                    formattedString = buffer.ToString().Remove(buffer.ToString().IndexOf(":")-1);

                }
                else if (buffer.ToString().IndexOf(".") > 0)
                {
                    formattedString = buffer.ToString().Remove(buffer.ToString().IndexOf(".")-1);

                }
                else
                {
                    formattedString = buffer.ToString();

                }
            }
            catch (Exception e)
            {
                System.Windows.Forms.MessageBox.Show("Exception  " + e.Message);
            }

            return formattedString=formattedString.Trim();
        }
        /// <summary>
        /// Removes the charecter and join the remaining strings
        /// </summary>
        /// <param name="buffer">
        /// String to be formatted
        /// </param>
        /// <returns>
        /// Returns the formatted string
        /// </returns>
        public String FormatExperienceString(String buffer)
        {
            String formattedstring = "";
            try
            {
                
                if (buffer.ToString().IndexOf("(") > 0)
                {
                    formattedstring = buffer.ToString().Replace("(", "");

                }
                else if (buffer.ToString().IndexOf(",") > 0)
                {
                    formattedstring = buffer.ToString().Replace(",", "");

                }
                else if (buffer.ToString().IndexOf(":") > 0)
                {
                    formattedstring = buffer.ToString().Replace(":",""); 

                }
                else if (buffer.ToString().IndexOf(".") > 0)
                {
                    formattedstring = buffer.ToString().Replace(".", "");

                }
                else if (buffer.ToString().IndexOf("-") > 0)
                {
                    formattedstring = buffer.ToString().Replace("-", "");

                }
                else if (buffer.ToString().IndexOf("/") > 0)
                {
                    formattedstring = buffer.ToString().Replace("/", "");

                }
                else if (buffer.ToString().IndexOf("\\") > 0)
                {
                    formattedstring = buffer.ToString().Replace("\\", "");

                }
                else if (buffer.ToString().IndexOf("\a") >= 0)
                {
                    formattedstring = buffer.ToString().Replace("\a", "");
                }
                else if (buffer.ToString().IndexOf("\n") >=0)
                {
                    formattedstring = buffer.ToString().Replace("\n", "");
                }
                else if (buffer.ToString().IndexOf("\t") >= 0)
                {
                    formattedstring = buffer.ToString().Replace("\t", "");
                }



                else
                {
                    formattedstring = buffer.ToString();

                }
            }
            catch (Exception e)
            {
                System.Windows.Forms.MessageBox.Show("Exception  " + e.Message);
            }

            return formattedstring = formattedstring.Trim();
        }
        /// <summary>
        /// extracts the Candidate name from the given array
        /// </summary>
        /// <param name="NameStrings">
        /// List words that is suspected as Name
        /// </param>
        /// <param name="emailid">
        /// Email id of the candidate
        /// </param>
        /// <returns>
        /// Returns name of the candidate
        /// </returns>
        public String ExtractName(ArrayList NameStrings,String emailid)
        {

            String Name="";
            try
            {
                bool isNum;
                bool isNum2;
                double Num;
                String asdf;
                
                for (int i = 0; i < NameStrings.Count; i++)
                {
                    isNum = double.TryParse(NameStrings[i].ToString(), out Num);
                    isNum2 = double.TryParse( FormatExperienceString(NameStrings[i].ToString()), out Num);
                    if (emailid.ToLower().Contains(NameStrings[i].ToString().ToLower())
                       && NameStrings[i].ToString().Length >= 4 && !NameStrings[i].ToString().ToLower().Contains('@')
                       && !NameStrings[i].ToString().ToLower().Contains("email")
                       && !NameStrings[i].ToString().ToLower().Contains("e-mail")&&!isNum &&!isNum2)
                    {
                        Name = NameStrings[i].ToString();
                        
                    }
                }
                if (Name.Length == 0)
                    for (int i = NameStrings.Count-1; i >0 ; i--)

                    {
                         asdf = FormatExperienceString(NameStrings[i].ToString());
                        isNum = double.TryParse(NameStrings[i].ToString(), out Num);
                        isNum2 = double.TryParse(FormatExperienceString(NameStrings[i].ToString()), out Num);
                        if (NameStrings[i].ToString().Length > 4&&!MostUsedEnglishWords.Contains(NameStrings[i].ToString().ToLower())
                           &&!isNum &&!isNum2)
                        {
                            Name = FormatExperienceString(NameStrings[i].ToString());
                            break;
                        }

                    }
            }
            catch (Exception e)
            {
                System.Windows.Forms.MessageBox.Show("Exception in extracting name "+e.Message,ApplicationStrings.ApplicationName,
                    System.Windows.Forms.MessageBoxButtons.OK,System.Windows.Forms.MessageBoxIcon.Error);
            }
            return Name;
        }
        /// <summary>
        /// Reads the experience details from the given list of words
        /// </summary>
        /// <param name="BeforeExperienceStrings">
        /// List of words before the word experience 
        /// </param>
        /// <param name="AfterExperienceStrings">
        /// List of words after the word experience 
        /// </param>
        /// <param name="experienceexctrated">
        /// boolean experience extracted from file (returned to calling function)
        /// </param>
        /// <param name="experiencefound">
        /// boolean experience extracted from file (returned to calling function)
        /// </param>
        /// <param name="wordcounter">
        /// Number of words after the word experience
        /// </param>
        /// <param name="experience_years">
        /// Years of Experience 
        /// </param>
        /// <param name="experience_months">
        /// Experience Months 
        /// </param>
        /// <returns>
        /// returns true when no error occured , and false when error occurs
        /// </returns>
        public bool ExtractExperience(ref ArrayList BeforeExperienceStrings, ref ArrayList AfterExperienceStrings,
            ref bool experienceexctrated, ref bool experiencefound, ref int wordcounter,
            ref String experience_years, ref String experience_months)
        {
            double Num;
            try
            {
                bool isNum2;
                bool isNumarray2;
                for (int i = 0; i <= 10; i++)
                {
                    isNum2 = double.TryParse(BeforeExperienceStrings[i].ToString(), out Num);
                    if (isNum2)
                    {
                        Regex regex2 = new Regex(@"^[-+]?[0-9]-*\.?[0-9]+$");
                        Match p2 = regex2.Match(BeforeExperienceStrings[i].ToString());

                        if (BeforeExperienceStrings[i + 1].ToString().ToLower().Equals("years") ||
                            BeforeExperienceStrings[i - 1].ToString().ToLower().Equals("years") ||
                            BeforeExperienceStrings[i + 1].ToString().ToLower().Equals("year") ||
                            BeforeExperienceStrings[i - 1].ToString().ToLower().Equals("year"))
                        {
                            experience_years = BeforeExperienceStrings[i].ToString();
                            experienceexctrated = true;
                        }
                        else if (BeforeExperienceStrings[i + 1].ToString().ToLower().Equals("months") ||
                            BeforeExperienceStrings[i - 1].ToString().ToLower().Equals("months") ||
                            BeforeExperienceStrings[i + 1].ToString().ToLower().Equals("month") ||
                            BeforeExperienceStrings[i - 1].ToString().ToLower().Equals("month"))
                        {
                            experience_months = BeforeExperienceStrings[i].ToString();
                            experienceexctrated = true;
                        }


                        //break;
                    }
                    isNumarray2 = double.TryParse(AfterExperienceStrings[i].ToString(), out Num);
                    {
                        if (isNumarray2)
                        {
                            Regex regex2 = new Regex(@"^[-+]?[0-9]-*\.?[0-9]+$");
                            Match p2 = regex2.Match(AfterExperienceStrings[i].ToString());

                            if (AfterExperienceStrings[i + 1].ToString().ToLower().Equals("years") ||
                                AfterExperienceStrings[i - 1].ToString().ToLower().Equals("years") ||
                                AfterExperienceStrings[i + 1].ToString().ToLower().Equals("year") ||
                                AfterExperienceStrings[i - 1].ToString().ToLower().Equals("year"))
                            {
                                experience_years = AfterExperienceStrings[i].ToString();
                                experienceexctrated = true;
                            }
                            else if (AfterExperienceStrings[i + 1].ToString().ToLower().Equals("months") ||
                                AfterExperienceStrings[i - 1].ToString().ToLower().Equals("months") ||
                                AfterExperienceStrings[i + 1].ToString().ToLower().Equals("month") ||
                                AfterExperienceStrings[i - 1].ToString().ToLower().Equals("month"))
                            {
                                experience_months = AfterExperienceStrings[i].ToString();
                                experienceexctrated = true;
                            }

                        }
                    }
                }


                if (experience_years.Length == 0 && experience_years.Length == 0)
                {
                    experiencefound = false;
                    experienceexctrated = false;
                    wordcounter = 0;
                }
            }
            catch (Exception e)
            {
                return false;
            }
                 
            return true;
        }
        /// <summary>
        /// Checks when the given word is end of sentence
        /// </summary>
        /// <param name="Word">
        /// Word to be searched
        /// </param>
        /// <returns>
        /// returns true when word is endof sendtence and false when not
        /// </returns>
        public bool IsEndofSentence(String Word)
        {
            if (Word.Contains('.'))
            {
                if (Word.IndexOf('.') == Word.Length-1)
                    return true;
                else
                    return false;
            }
            else
                return false;
        }
        /// <summary>
        ///  lists most commonly used english words
        /// </summary>
        /// <returns>
        /// retunrs list of words
        /// </returns>
       public ArrayList GetMostCommonEnglishWords()
        {
          String[]  EnglishWords = {"about","after","again","air","all","along","also","an","and","another",
                        "any","are","around","as","at","away","back","be","because","been",
                        "before","below","between","both","but","by","came","can","come","could",
                        "day","did","different","do","does","don't","down","each","end","even",
                        "every","few","find","first","for","found","from","get","give","go",
                        "good","great","had","has","have","he","help","her","here","him",
                        "his","home","house","how","I","if","in","into","is","it",
                        "its","just","know","large","last","left","like","line","little","long",
                        "look","made","make","man","many","may","me","men","might","more",
                        "most","Mr.","must","my","name","never","new","next","no","not",
                        "now","number","of","off","old","on","one","only","or","other",
                        "our","out","over","own","part","people","place","put","read","right",
                        "said","same","saw","say","see","she","should","show","small","so",
                        "some","something","sound","still","such","take","tell","than","that","the",
                        "them","then","there","these","they","thing","think","this","those","thought",
                        "three","through","time","to","together","too","two","under","up","us",
                        "use","very","want","water","way","we","well","went","were","what",
                        "when","where","which","while","who","why","will","with","word","work",
                        "world","would","write","year","you","your","was","able","above","across",
                        "add","against","ago","almost","among","animal","answer","became","become","began",
                        "behind","being","better","black","best","body","book","boy","brought","call",
                        "cannot","car","certain","change","children","city","close","cold","country","course",
                        "cut","didn't","dog","done","door","draw","during","early","earth","eat",
                        "enough","ever","example","eye","face","family","far","father","feel","feet",
                        "fire","fish","five","food","form","four","front","gave","given","got",
                        "green","ground","group","grow","half","hand","hard","heard","high","himself",
                        "however","I'll","I'm","idea","important","inside","John","keep","kind","knew",
                        "known","land","later","learn","let","letter","life","light","live","living",
                        "making","mean","means","money","morning","mother","move","Mrs.","near","night",
                        "nothing","once","open","order","page","paper","parts","perhaps","picture","play",
                        "point","ready","red","remember","rest","room","run","school","sea","second",
                        "seen","sentence","several","short","shown","since","six","slide","sometime","soon",
                        "space","States","story","sun","sure","table","though","today","told","took",
                        "top","toward","tree","try","turn","United","until","upon","using","usually",
                        "white","whole","wind","without","yes","yet","young","alone","already","although",
                        "am","America","anything","area","ball","beautiful","beginning","Bill","birds","blue",
                        "boat","bottom","box","bring","build","building","built","can't","care","carefully",
                        "carried","carry","center","check","class","coming","common","complete","dark","deep",
                        "distance","doing","dry","easy","either","else","everyone","everything","fact","fall",
                        "fast","felt","field","finally","fine","floor","follow","foot","friend","full",
                        "game","getting","girl","glass","goes","gold","gone","happened","having","heart",
                        "heavy","held","hold","horse","hot","hour","hundred","ice","Indian","instead",
                        "itself","job","kept","language","lay","least","leave","let's","list","longer",
                        "low","main","map","matter","mind","Miss","moon","mountain","moving","music",
                        "needed","notice","outside","past","pattern","person","piece","plant","poor","possible",
                        "power","probably","problem","question","quickly","quite","rain","ran","real","river",
                        "road","rock","round","sat","scientist","shall","ship","simple","size","sky",
                        "slowly","snow","someone","special","stand","start","state","stay","stood","stop",
                        "stopped","strong","suddenly","summer","surface","system","taken","talk","tall","ten",
                        "that's","themselves","third","tiny","town","tried","voice","walk","warm","watch",
                        "weather","whether","wide","wild","winter","within","writing","written","age","ask",
                        "baby","base","beside","bright","business","buy","case","catch","caught","child",
                        "choose","circle","clear","color","copy","correct","couldn't","difference","direction","dried",
                        "easily","edge","egg","eight","energy","England","especially","Europe","exactly","except",
                        "explain","famous","farm","fell","figure","flat","fly","forest","free","French",
                        "fun","George","government","grass","grew","hair","happy","he's","heat","history",
                        "human","I've","inch","information","iron","Jim","Joe","King","larger","late",
                        "leg","length","listen","lost","lot","lower","machine","mark","maybe","measure",
                        "meet","middle","milk","minute","modern","moment","month","mouth","natural","nearly",
                        "necessary","New","York","north","object","ocean","oil","pay","per","plan",
                        "plane","present","product","rather","reach","reason","record","running","seems","sent",
                        "seven","shape","sides","single","skin","sleep","smaller","soft","soil","south",
                        "speak","speed","spring","square","star","step","store","straight","strange","street",
                        "subject","suppose","teacher","thousand","thus","Tom","travel","trip","trouble","unit",
                        "village","wall","war","wasn't","week","whose","window","wish","women","won't",
                        "wood","wrote","yellow","you're","yourself","action","addition","afraid","afternoon","ahead",
                        "amount","ancient","anyone","arm","bad","bear","beyond","bit","blood","board",
                        "Bob","born","break","British","broken","brother","brown","busy","capital","cat",
                        "cattle","cause","century","chance","clean","clothes","coast","control","cool","corn",
                        "corner","cover","cross","Dan","dead","deal","death","decide","difficult","doesn't",
                        "drive","engine","evening","farmer","faster","fight","fill","finger","force","forward",
                        "France","fresh","garden","general","glad","greater","greatest","guess","happen","Henry",
                        "higher","hit","hole","hope","huge","interest","island","isn't","jack","lady",
                        "largest","lead","led","level","love","Mary","material","meant","meat","method",
                        "missing","needs","nor","nose","note","opposite","pair","party","pass","period",
                        "please","position","pound","practice","pretty","produce","pull","quiet","race","radio",
                        "region","result","return","rich","ride","ring","rule","sand","science","section",
                        "seed","send","sense","sets","sharp","sight","sign","silver","similar","sit",
                        "son","song","spent","spread","stick","stone","tail","team","teeth","temperature",
                        "test","there's","therefore","thick","thin","train","various","wait","Washington","wave",
                        "we'll","weight","west","wife","wouldn't","wrong","you'll","according","act","actually",
                        "Africa","alike","apart","ate","attention","bank","basic","beat","blow","bone",
                        "bread","careful","chair","chief","Christmas","church","cloth","cloud","column","compare",
                        "contain","continued","cost","cotton","count","dance","describe","desert","dinner","doctor",
                        "dollar","drop","dropped","ear","east","electric","element","enjoy","equal","exercise",
                        "experiment","familiar","farther","fear","forth","gas","giving","gray","grown","hardly",
                        "hat","hill","hurt","I'd","imagine","include","indeed","Johnny","joined","key",
                        "kitchen","knowledge","law","lie","major","met","metal","movement","nation","nature",
                        "nine","none","office","older","onto","original","paragraph","parent","particular","path",
                        "Paul","Peter","pick","president","pressure","process","public","quick","report","rope",
                        "rose","row","safe","salt","Sam","scale","sell","separate","sheep","shoe",
                        "shore","simply","sing","sister","sitting","sold","soldier","solve","speech","spend",
                        "steel","string","student","studied","sugar","television","term","throughout","tired","total",
                        "touch","trade","truck","twice","type","uncle","unless","useful","value","verb",
                        "visit","wear","what's","wheel","William","wing","wire","won","wonder","worker",
                        "yard","1/2","alive","angry","army","average","bag","band","Billy","branch",
                        "breakfast","breath","broke","bus","cabin","California","camp","captain","cell","cent",
                        "certainly","changing","closer","coal","coat","community","company","completely","compound","condition",
                        "consider","correctly","crop","crowd","current","danger","dear","degree","develop","die",
                        "directly","discover","divide","double","Dr.","dress","drink","drove","dust","easier",
                        "effect","electricity","empty","entire","everybody","exciting","expect","experience","express","fair",
                        "feed","final","finish","flew","fruit","further","future","Greek","guide","gun",
                        "herself","hungry","instrument","Jane","join","jump","laid","liquid","loud","market",
                        "member","Mexico","Mike","mine","motion","myself","neck","news","nice","noise",
                        "noun","oxygen","paid","phrase","plain","poem","population","proper","proud","provide",
                        "purpose","putting","quietly","raise","range","rate","regular","related","replied","represent",
                        "rise","scientific","season","seat","share","shot","shoulder","slow","smile","solid",
                        "solution","sort","southern","stage","statement","station","steam","stream","strength","supply",
                        "surprise","symbol","till","tomorrow","tube","twelve","twenty","usual","valley","variety",
                        "vowel","we're","wet","wooden","worth","airplane","angle","Ann","apple","art",
                        "Atlantic","atmosphere","bar","barn","baseball","beauty","believed","bell","belong","beneath",
                        "bigger","bottle","bowl","broad","chapter","chart","Chinese","clearly","climate","clock",
                        "closely","clothing","coffee","cow","cry","Dad","dangerous","deer","desk","detail",
                        "development","drew","driver","event","everywhere","fat","favorite","fence","fifty","flight",
                        "flow","flower","forget","fourth","friendly","generally","German","Germany","giant","golden",
                        "grain","handle","height","hung","hurry","immediately","industry","instance","Italy","James",
                        "knife","lake","Latin","leader","leaving","likely","lunch","mass","master","mile",
                        "mix","model","mud","muscle","nearby","nearest","nest","newspaper","nobody","observe",
                        "Pacific","peace","plate","plenty","popular","powerful","push","railroad","rapidly","root",
                        "rubber","sad","sail","save","score","seeing","serious","service","sheet","shop",
                        "silent","smell","smoke","smooth","source","spell","storm","structure","supper","support",
                        "sweet","swim","telephone","Texas","threw","throw","tone","tool","track","trail",
                        "understanding","upper","view","wagon","western","whatever","wheat","whenever","whom","win",
                        "wonderful","wore","ability","agree","ants","Asia","asleep","attack","balance","bat",
                        "battle","Ben","block","bow","brain","brave","bridge","cave","charge","chemical",
                        "China","clay","climb","composition","congress","copper","crew","cup","daughter","design",
                        "determine","direct","discuss","division","drawn","earlier","eaten","education","enemy","enter",
                        "equipment","escape","European","excited","expression","extra","factory","feathers","fellow","fighting",
                        "fought","Frank","freedom","funny","fur","growth","hall","he'd","health","highest",
                        "hunt","including","increase","indicate","individual","Japanese","kill","laugh","library","lift",
                        "lion","local","lose","lovely","lying","magic","Mama","manner","Mark","May",
                        "mostly","national","neighbor","ordinary","parallel","park","particularly","pencil","perfect","planet",
                        "planned","pleasant","pocket","police","political","post","potatoes","price","printed","program",
                        "property","prove","remain","riding","roll","Roman","roof","rough","scene","search",
                        "secret","series","serve","settlers","shinning","shut","signal","Sir","skill","smallest",
                        "social","softly","St.","struck","studying","success","suit","sunlight","swimming","taste",
                        "taught","thank","they're","tip","title","tongue","valuable","vast","vegetable","wash",
                        "weak","you've","activity","Alaska","appearance","aren't","article","Aunt","automobile","avoid",
                        "basket","birthday","cage","cake","Canada","central","character","Charles","chicken","chosen",
                        "club","cook","court","cream","cutting","daily","darkness","diagram","Dick","disappear",
                        "doubt","dozen","dream","driving","effort","establish","exact","excitement","fifteen","flag",
                        "flies","football","foreign","frame","frequently","frighten","function","gate","gently","gradually",
                        "hadn't","harder","hide","hurried","identity","importance","impossible","India","invented","Italian",
                        "jar","journey","joy","lesson","Lincoln","lips","log","London","loose","massage",
                        "minerals","outer","paint","Papa","Paris","particles","personal","physical","pie","pipe",
                        "pole","pond","progress","quarter","rays","recent","recognize","replace","rhythm","Richard",
                        "Robert","rod","ruler","safety","Sally","sang","setting","shells","sick","situation",
                        "slightly","Spain","spirit","steady","stepped","strike","successful","sudden","sum","terrible",
                        "tie","traffic","unusual","volume","whale","wise","yesterday","account","allow","anywhere",
                        "attached","audience","available","balloon","bare","bark","begun","bent","biggest","bill",
                        "blank","blew","breathing","butter","cap","carbon","card","chain","cheese","chest",
                        "Chicago","choice","circus","citizen","classroom","college","consist","continent","conversation","courage",
                        "cowboy","creature","date","depend","differ","discovery","disease","duck","due","Dutch",
                        "entirely","environment","exclaimed","factor","fog","forgot","forgotten","frozen","fuel","furniture",
                        "gather","gentle","globe","grandfather","greatly","haven't","helpful","hidden","honor","husband",
                        "involved","Japan","jet","Jimmy","layers","leaf","leather","load","lonely","Louis",
                        "March","meal","medicine","merely","mice","molecular","musical","native","Negro","noon",
                        "occur","orange","ought","pack","partly","pet","pine","pink","pitch","pool",
                        "prepare","press","prevent","pure","queen","rabbit","ranch","realize","receive","recently",
                        "rice","rising","rocket","Saturday","saved","shade","shadow","shirt","shoot","shorter",
                        "silence","slipped","Smith","snake","somewhere","spoken","standard","straw","strip","substance",
                        "suggest","Sunday","teach","tears","thirty","Thomas","thread","throat","tight","tin",
                        "triangle","truth","union","warn","whispered","wool","you'd","1/4","aid","aloud",
                        "Andy","anyway","arrow","aside","atomic","author","basis","bean","becoming","Betsy",
                        "bicycle","blanket","brush","buffalo","burn","burst","bush","Carlos","collect","colony",
                        "combination","combine","comfortable","complex","composed","concerned","connected","construction","couple","create",
                        "curious","dig","dirt","distant","dot","Edward","elephant","etc.","evidence","examine",
                        "excellent","failed","fallen","fastened","feature","fed","gain","graph","hearing","highway",
                        "improve","influence","July","June","lack","lamp","locate","luck","mail","married",
                        "mighty","mirror","Mississippi","motor","mouse","needle","nodded","numeral","offer","oldest",
                        "operation","orbit","organized","outline","pain","pan","pen","piano","pictured","pig",
                        "pile","planning","pony","principal","production","refer","religious","repeat","research","respect",
                        "review","route","silk","slept","spite","stretch","stronger","stuck","swing","task",
                        "tax","tea","tent","thee","theory","thrown","tonight","topic","tower","transportation",
                        "trick","underline","unknown","upward","Virginia","waste","we've","wherever","willing","worry",
                        "worse","youth","accept","accident","active","additional","adjective","affect","Alice","alphabet",
                        "announced","anybody","April","arrange","Australia","aware","badly","bee","belt","bite",
                        "blind","bound","castle","characteristic","Columbus","compass","consonant","curve","definition","dish",
                        "Don","driven","dug","earn","Eddy","eventually","explore","fairly","fewer","fifth",
                        "Florida","gasoline","gift","grade","halfway","hang","he'll","headed","herd","hollow",
                        "income","industrial","introduced","Johnson","Jones","judge","loss","lucky","machinery","mad",
                        "magnet","Mars","military","mistake","mood","nails","naturally","negative","obtain","origin",
                        "owner","passage","percent","perfectly","pilot","pleasure","plural","plus","poet","porch",
                        "pot","powder","previous","primitive","principle","prize","purple","raw","reader","remove",
                        "salmon","screen","seldom","select","society","somebody","specific","spider","sport","stairs",
                        "stared","steep","stomach","stove","stranger","struggle","surrounded","swam","syllable","tank",
                        "tape","thou","tightly","Tim","trace","tribe","trunk","TV","universe","visitor",
                        "vote","weigh","Wilson","younger","zero","aboard","accurate","actual","adventure","apartment",
                        "applied","appropriate","arrive","atom","Bay","behavior","bend","bet","birth","brass",
                        "breathe","brief","buried","camera","captured","chamber","command","crack","Daniel","David",
                        "dawn","declared","diameter","difficulty","dirty","dull","duty","eager","eleven","engineer",
                        "equally","equator","fierce","firm","fix","flame","former","forty","fox","Fred",
                        "frog","fully","goose","gravity","Greece","guard","gulf","handsome","harbor","hay",
                        "hello","horn","hospital","ill","interior","Jeff","jungle","labor","limited","location",
                        "mainly","managed","Maria","mental","mixture","movie","nearer","nervous","noted","October",
                        "officer","Ohio","opinion","opportunity","organization","package","pale","plastic","Pole","port",
                        "pour","private","properly","protection","pupil","rear","refused","roar","Rome","Russia",
                        "Russian","saddle","settle","shelf","shelter","shine","sink","slabs","slave","somehow",
                        "split","stems","stock","swept","thy","tide","torn","troops","tropical","typical",
                        "unhappy","vertical","victory","voyage","welcome","weren't","whistle","widely","worried","wrapped",
                        "writer","acres","adult","advice","arrangement","attempt","August","Autumn","border","breeze",
                        "brick","calm","canal","Casey","cast","chose","claws","coach","constantly","contrast",
                        "cookies","customs","damage","Danny","deeply","depth","discussion","doll","donkey","Egypt",
                        "Ellen","essential","exchange","exist","explanation","facing","film","finest","fireplace","floating",
                        "folks","fort","garage","grabbed","grandmother","habit","happily","Harry","heading","hunter",
                        "Illinois","image","independent","instant","January","kids","label","Lee","lungs","manufacturing",
                        "Martin","mathematics","melted","memory","mill","mission","monkey","Mount","mysterious","neighborhood",
                        "Norway","nuts","occasionally","official","ourselves","palace","Pennsylvania","Philadelphia","plates","poetry",
                        "policeman","positive","possibly","practical","pride","promised","recall","relationship","remarkable","require",
                        "rhyme","rocky","rubbed","rush","sale","satellites","satisfied","scared","selection","shake",
                        "shaking","shallow","shout","silly","simplest","slight","slip","slope","soap","solar",
                        "species","spin","stiff","swung","tales","thumb","tobacco","toy","trap","treated",
                        "tune","University","vapor","vessels","wealth","wolf","zoo","resume","curriculamvitae",
                         "biodata","bio-data","cv","furnished","d","sr","1st","2nd","3rd","4th","5th","6th",
                        "7th","8th","9th","10th","Mandarin","Spanish","English","Hindi","Urdu","Arabic","Bengali","Portuguese","Russian","Japanese",
"Punjabi","German","Javanese","Wu","Telugu","Vietnamese","Marathi","French","Korean","Tamil",
"Yue","Turkish","Pashto","Italian","Min","Nan","Gujarati","Polish","Persian","Bhojpuri",
"Awadhi","Ukrainian","Malay","Xiang","Malayalam","Kannada","Maithili","Sundanese","Burmese","Oriya",
"Marwari","Hakka","Thai","Hausa","Tagalog","Romanian","Dutch","Gan","Sindhi","Azerbaijani",
"Uzbek","Lao-Isan","Yoruba","Igbo","Northern","Berber","Amharic","Oromo","Assamese","Kurdish",
"Serbo-Croatian","Cebuano","Sinhalese","Rangpuri","Malagasy","Khmer","Zhuang","Sotho-Tswana","Nepali","Rwanda-Rundi",
"Somali","Madurese","Greek","Fula","Hungarian","Catalan","Bulgarian-Macedonian","Shona","Zulu","Min",
"Bei","Czech","Min","Dong","Lombard","Uyghur","Chewa","Belarusian","Kazakh","Swedish",
"Akan","Makuwa","Tatar-Bashkir","Xhosa","Haitian","Albanian","Gikuyu","Neapolitan","Ilokano","Balochi",
"Southern","Quechua","Batak","Turkmen","Mossi-Dagomba","Armenian","Sukuma-Nyamwezi","Tshiluba","Santali","Venetian",
"Kongo","Hiligaynon","Tigrinya","Mongolian","Bhili","Danish","Minangkabau","Kashmiri","Hebrew","Finnish",
"Slovak","Afrikaans","Guarani","Mandingo","Sicilian","Norwegian","Bikol","Bambara","Dholuo","Georgian",
"Kanuri","Wolof","Ganda","Umbundu","Kamba","Dogri","Tsonga","Konkani","Bemba","Buginese",
"Efik","Acehnese","Balinese","Mazanderani-Gilaki","Shan","Lithuanian","Galician","Jamaican","Creole","Ewe",
"Piemonteis","Kimbundu","Kyrgyz","curriculam","vitae"};
          ArrayList EnglishWordsList = new ArrayList();
          EnglishWordsList.AddRange(EnglishWords);
          using (StreamReader csr = new StreamReader(EnglishWordsLocation))
          {
              while ((!csr.EndOfStream))
              {

                  int c = csr.Peek();

                  while (c != -1 && Char.IsWhiteSpace(Convert.ToChar(c)))
                  {
                      csr.Read(); c = csr.Peek();
                  }
                  StringBuilder word = new StringBuilder();
                  while (c != -1 && !Char.IsWhiteSpace(Convert.ToChar(c)))
                  {
                      word.Append(Convert.ToChar(c)); csr.Read(); c = csr.Peek();
                  }

                  if (word.ToString() != "" || word.ToString() != null)
                      EnglishWordsList.Add(word.ToString().ToLower());


              }

          }

          return EnglishWordsList;
        }

        /******************************************************************************************************/
        /// <summary>
        /// creates  a static array and writes in a given file (used for development purpose only)
        /// </summary>
        public void  createstaticArray()
        {
            ArrayList cityList = new ArrayList();
            StreamWriter csw = new StreamWriter("c:\\ragu\\array.txt");
            int counter=0;
            try
            {
                using (StreamReader csr = new StreamReader("D:\\ProjectBackups\\mapashare client tool\\Csv generator\\Csv generator\\bin\\Debug\\Libs\\Languages.txt"))
                {
                    while ((!csr.EndOfStream))
                    {

                        int c = csr.Peek();

                        while (c != -1 && Char.IsWhiteSpace(Convert.ToChar(c)))
                        {
                            csr.Read(); c = csr.Peek();
                        }
                        StringBuilder city = new StringBuilder();
                        while (c != -1 && !Char.IsWhiteSpace(Convert.ToChar(c)))
                        {
                            city.Append(Convert.ToChar(c)); csr.Read(); c = csr.Peek();
                        }

                        if (city.ToString() != "" || city.ToString() != null)
                        {
                            csw.Write("\"" + city.ToString() + "\",", FileMode.Append, FileAccess.Write);
                            counter++;
                            if (counter == 10)
                            {
                                csw.Write("\n" , FileMode.Append, FileAccess.Write);
                                counter = 0;
                            }
                        }


                    }

                }
                
                csw.Close();
            }
            catch (Exception e)
            { }
            

        }
        /******************************************************************************************************/
        /// <summary>
        /// writes the new keywords to the keywords file
        /// </summary>
        /// <param name="Keyword">
        /// list of newkwywords to be entered in comma separated string
        /// </param>
        public void AddKeyword(String Keyword)
        {

            char[] delimiters = { ',' };

            string[] keywords = Keyword.Split(delimiters, StringSplitOptions.RemoveEmptyEntries);
            StreamWriter keywordWriter = new StreamWriter(KeywordsLocation,true);
            
            try
            {
                foreach (string key in keywords)
                {
                    keywordWriter.Write("\n" + key, FileMode.Append, FileAccess.Write);
                }
               keywordWriter.Close();
            }
            catch (Exception e)
            {
                keywordWriter.Close();
            }


        }
        /// <summary>
        /// writes new englishwords in file
        /// </summary>
        /// <param name="word">
        /// list of new word to be written in a comma separated string
        /// </param>
        public void AddEnglishWords(String word)
        {
            char[] delimiters={','};

            string[] words = word.Split(delimiters, StringSplitOptions.RemoveEmptyEntries);
            string[] existingwords = System.IO.File.ReadAllLines(EnglishWordsLocation);
            StreamWriter EnglishWordWriter = new StreamWriter(EnglishWordsLocation, true);
            bool nonEmptyFile=true;

            try
            {
                foreach (string newword in words)
                {
                    if (existingwords.Length == 0 && nonEmptyFile== true)
                    {
                        EnglishWordWriter.Write(newword, FileMode.Append, FileAccess.Write);
                        nonEmptyFile = false;
                    }
                    else
                    {
                        EnglishWordWriter.Write("\n" + newword, FileMode.Append, FileAccess.Write);
                    }
                }
                EnglishWordWriter.Close();
            }
            catch (Exception e)
            {

                EnglishWordWriter.Close();
            }


        }
       /// <summary>
       /// To read name,phonenumber,mailid,location,experience details in given list of resumes
       /// </summary>
       /// <param name="worker"></param>
       /// <param name="e"></param>
       /// <param name="ConvertedFiles">
       /// Arraylist contains list of files to be serched for a keyfields
       /// </param>
       /// <param name="TempPath">
       /// System teporary folder path to store temporary files used in reading details
       /// </param>
       /// <param name="SourcePath">
       /// Source path of files
       /// </param>
       /// <param name="DestinationPath">
       /// Path of the destination file to be stored
       /// </param>
       /// <param name="PredefinedKeywords">
       /// List of predefined keywords
       /// </param>
       /// <param name="city">
       /// List of known cities
       /// </param>
       /// <param name="Gender">
       /// List of genders avalable
       /// </param>
       ///  <param name="wordap">
       ///  object of the word application to be used to manipulate files
       /// </param>
       /// <returns>
       /// Retunrs true if converted successfully else returns false
       /// </returns>
 
         
        public bool ParseFiles(BackgroundWorker worker, DoWorkEventArgs e,ArrayList ConvertedFiles,String TempPath,
            String SourcePath, String DestinationPath, ArrayList PredefinedKeywords, ArrayList city,ArrayList Gender,Application wordap)
        {
            ap = wordap;
            int successiveWordCounter = 0;
            int previousWordCount = 0;
            string addSplittedNumbers = "";
            bool mailidCheck = false;
            bool phoneNumberCheck = false;
            float filesProcessed = 0;
            //String[] convertedFiles;
            ArrayList beforeExperienceStrings;
            ArrayList afterExperienceStrings;
            ArrayList nameStrings;
            ArrayList matchCity = new ArrayList();
            object missing = System.Reflection.Missing.Value;
            String fileName = null;                      
            string sex = null;
            float noOfFiles = 0;
            filesProcessed = 0;            
            ArrayList RemoveList = new ArrayList();                       
            String experience_years = "";
            String experience_months = "";
            bool addsplitters = true;
            bool experienceFound = false;
            bool experienceExctrated = false;
            beforeExperienceStrings = new ArrayList(15);
            afterExperienceStrings = new ArrayList(15);
            ArrayList keywords = new ArrayList();
            ArrayList unKnownWords = new ArrayList();
            nameStrings = new ArrayList(22);
            float percentage = 5;
            int wordcounter = 0;
            int namecounter = 0;
            string[] tempfolderfiles= { "", "" };
            if (!File.Exists(SourcePath))
            {
                System.Windows.Forms.MessageBox.Show(ApplicationStrings.InvalidPath, ApplicationStrings.ApplicationName, System.Windows.Forms.MessageBoxButtons.OK, System.Windows.Forms.MessageBoxIcon.Error);
                return false;
            }

            else
            {
                // To copy a folder's contents to a new location:
                // Create a new target folder, if necessary.
                if (System.IO.Directory.Exists(TempPath + ApplicationStrings.TempFolderName))
                {
                    System.IO.Directory.Delete(TempPath + ApplicationStrings.TempFolderName, true);
                }
                if (!System.IO.Directory.Exists(TempPath + ApplicationStrings.TempFolderName+"\\"))
                {
                    System.IO.Directory.CreateDirectory(TempPath + ApplicationStrings.TempFolderName+"\\");
                }

             
                    foreach (String file in ConvertedFiles)
                    {
                        string tempfilename = Path.GetFileName(file);
                        System.IO.File.Copy(file, TempPath + ApplicationStrings.TempFolderName+"\\" + tempfilename, true);
                    }
                    StreamWriter csvwriter = new StreamWriter(DestinationPath);
                
                try
                {

                     
                    if (System.IO.Directory.Exists(TempPath + ApplicationStrings.TempFolderName))
                    {
                        tempfolderfiles = System.IO.Directory.GetFiles(TempPath + ApplicationStrings.TempFolderName);
                    }
                    else
                    {
                        System.Windows.Forms.MessageBox.Show(ApplicationStrings.InvalidPath, ApplicationStrings.ApplicationName, System.Windows.Forms.MessageBoxButtons.OK, System.Windows.Forms.MessageBoxIcon.Error);
                        return false;
                    }
                   
                    foreach (String file in tempfolderfiles)
                    {
                        initializearray(ref beforeExperienceStrings, ref afterExperienceStrings, ref nameStrings);
                        namecounter = 0;
                        wordcounter = 0;
                        fileName = Path.GetFileName(file);
                        noOfFiles = tempfolderfiles.Length;                      
                        ArrayList mailid = new ArrayList();
                        ArrayList phoneno = new ArrayList();
                        string formattedString = "";
                        Regex emailregex = new Regex("(?<user>[^@]+)@(?<host>.+)");
                        double Num;
                        object fileObject = (object)file;
                        string textFile = Path.GetFileNameWithoutExtension(file);
                        textFile = TempPath + textFile + ".txt";
                        StreamWriter textFileWriter = new StreamWriter(textFile);
                        object confirmConversions = false;
                        object readOnly = false;
                        object addtoRecentFiles = false;
                        Microsoft.Office.Interop.Word._Document doc = ap.Documents.Open(ref fileObject, ref confirmConversions, ref readOnly, ref addtoRecentFiles,
                            ref missing, ref missing,
                           ref missing, ref missing, ref missing, ref missing, ref missing,
                           ref missing, ref missing, ref missing, ref missing, ref missing);

                        Microsoft.Office.Interop.Word.Document doccumentText = ap.ActiveDocument;
                        string documentText = doccumentText.Content.Text;
                        textFileWriter.Write(documentText.ToString());
                        textFileWriter.Close();
                        doc.Close(ref missing, ref missing, ref missing);
                        worker.ReportProgress((int)percentage, "Extracting(" + (filesProcessed + 1) + "/" + noOfFiles + ")  " + fileName);
                        using (StreamReader readfile = new StreamReader(new FileStream(textFile, FileMode.Open, FileAccess.Read)))
                        {

                            while ((!readfile.EndOfStream))
                            {


                                int c = readfile.Peek();

                                while (c != -1 && Char.IsWhiteSpace(Convert.ToChar(c)))
                                {
                                    readfile.Read(); c = readfile.Peek();

                                }


                                StringBuilder buffer = new StringBuilder();

                                while (c != -1 && !Char.IsWhiteSpace(Convert.ToChar(c)))
                                {
                                    buffer.Append(Convert.ToChar(c)); readfile.Read(); c = readfile.Peek();

                                }
                                //to count words in resume 
                                successiveWordCounter++;
                                /**************************extracting city name from document******************/

                                formattedString = FormatString(buffer.ToString());

                                if (namecounter < 21)
                                {
                                    if (buffer.ToString().Length >= 4 && !buffer.ToString().ToLower().Contains('@')
                                       && !buffer.ToString().ToLower().Contains("email") && !buffer.ToString().ToLower().Contains("e-mail"))
                                    {
                                        namecounter++;
                                        InsertInName(FormatExperienceString(buffer.ToString()), ref nameStrings);
                                    }

                                }
                                if (city.Contains(formattedString.ToString().ToLower()))
                                {
                                    if (!matchCity.Contains(buffer.ToString().ToLower()))//searching here for the list
                                    {                                               // of cities in file
                                        matchCity.Add(buffer.ToString().ToLower());
                                        RemoveList.Add(buffer.ToString());// adding word to list removelist to remove from document
                                    }
                                }
                                /*************extracting keywords from document *****************/
                                formattedString = FormatExperienceString(buffer.ToString());
                                /*  extrating phone number from the document*/
                                bool isNumber = double.TryParse(formattedString, out Num);
                                if (PredefinedKeywords.Contains(formattedString.ToString().ToLower())
                                    && !MostUsedEnglishWords.Contains(formattedString.ToLower()) && !isNumber)
                                {
                                    if (!keywords.Contains(formattedString.ToString().ToLower()))//searching here for the list
                                    {                                               // of keywords in file
                                        keywords.Add(formattedString.ToString().ToLower());
                                       // RemoveList.Add(formattedString.ToString());// adding word to list removelist to remove from document
                                    }
                                }
                                else if (!MostUsedEnglishWords.Contains(formattedString.ToLower()) && !isNumber)
                                {
                                    if (!unKnownWords.Contains(formattedString.ToString().ToLower()))//searching here for the list
                                    {                                               // of keywords in file
                                        unKnownWords.Add(formattedString.ToString().ToLower());
                                        //RemoveList.Add(formattedstring.ToString());// adding word to list removelist to remove from document
                                    }
                                }
                                /************* extracting gender from document*******************/
                                if (Gender.Contains(buffer.ToString().ToLower()))
                                {
                                    sex = buffer.ToString();//storing gender 
                                }

                                String tempBuffer = buffer.ToString();
                                /*************** extracting mail id from document *****************/
                                Match m = emailregex.Match(tempBuffer);

                                if (m.Success)
                                {
                                                               


                                    if (!mailid.Contains(tempBuffer.ToString()))//checking is current mailid is
                                    {                                           //already added in the list    
                                        mailid.Add(tempBuffer.ToString());
                                        RemoveList.Add(tempBuffer.ToString()); // adding a word to remove from the document
                                    }                                                       

                                    mailidCheck = true;
                                }
                                else
                                {
                                    string deleterecord = buffer.ToString();

                                }

                                if (tempBuffer.ToString().IndexOf("-") > 0)
                                {
                                    tempBuffer = tempBuffer.ToString().Replace("-", "");
                                    tempBuffer = tempBuffer.ToString().Replace(".", "");
                                }
                                else
                                {
                                    tempBuffer = tempBuffer.ToString();
                                }
                                //extrating mail id ends here
                                /*  extrating phone number from the document*/
                                bool isNum = double.TryParse(tempBuffer, out Num);

                                if (isNum)
                                {
                                    Regex regex = new Regex(@"^[-+]?[0-9]-*\.?[0-9]+$");
                                    Match p = regex.Match(tempBuffer);


                                    if (tempBuffer.Length >= 10) //checking whether the number of digits is greater than 10
                                    {
                                        

                                        if (!phoneno.Contains(tempBuffer.ToString()))
                                        {
                                            phoneno.Add(tempBuffer.ToString());
                                            RemoveList.Add(tempBuffer.ToString());
                                        }


                                        phoneNumberCheck = true;


                                    }
                                    else if (tempBuffer.Length < 10 && addsplitters == true && phoneno.Count == 0 &&

                                        !IsEndofSentence(tempBuffer.ToString()))//adding to the string array to get the numbers that are 
                                    {                                           //typed with space

                                        
                                        if (++previousWordCount == successiveWordCounter||previousWordCount==1)
                                        {
                                            previousWordCount = successiveWordCounter;
                                            addSplittedNumbers += tempBuffer.ToString();
                                        }

                                        if (addSplittedNumbers.Length >= 10)
                                        {
                                            String recordnext_second;
                                            if (phoneNumberCheck == true || mailidCheck == true)
                                            {
                                                recordnext_second = "," + addSplittedNumbers.ToString();
                                            }
                                            else
                                            {
                                                recordnext_second = addSplittedNumbers.ToString();
                                            }

                                            if (!phoneno.Contains(addSplittedNumbers.ToString()))
                                            {
                                                phoneno.Add(addSplittedNumbers.ToString());
                                                RemoveList.Add(addSplittedNumbers.ToString());
                                            }

                                            addSplittedNumbers = "";
                                            addsplitters = false;
                                            phoneNumberCheck = true;

                                        }
                                    }

                                }//phone number dectection ends
                                /* checking for experience*/
                                formattedString = FormatExperienceString(buffer.ToString());
                                if (experienceExctrated == false)
                                {
                                    if (formattedString.ToString().ToLower().Equals("experience") && experienceFound == false) // cheking for 
                                    {                                                               //word experience in string to fine experience details        
                                        experienceFound = true;

                                    }

                                    if (experienceFound == true)
                                    {
                                        insertinarray2(formatString(tempBuffer.ToString()), ref afterExperienceStrings);
                                        wordcounter++;
                                    }
                                    else
                                    {
                                        insertinarray(formatString(tempBuffer.ToString()), ref beforeExperienceStrings);
                                    }
                                }

                                if (wordcounter == 10)
                                {
                                    ExtractExperience(ref  beforeExperienceStrings, ref  afterExperienceStrings,
                                    ref  experienceExctrated, ref  experienceFound, ref  wordcounter,
                                    ref  experience_years, ref  experience_months);
                                }//word counter if ends here

                            }//file read while loop ends here


                            readfile.Close();
                        }//looping all the selected files

                        if (File.Exists(textFile))
                        {
                            File.Delete(textFile);
                        }
                        /* wrtie all details extracted in file */
                        WriteExtractedStrings(nameStrings, mailid, matchCity, experienceFound, experience_years, experience_months,
                            sex, phoneno, keywords, unKnownWords, fileName, DestinationPath, csvwriter);
                        mailidCheck = false;
                        phoneNumberCheck = false;
                        experienceExctrated = false;
                        experienceFound = false;
                        wordcounter = 0;
                        namecounter = 0;
                        previousWordCount = 0;
                        successiveWordCounter = 0;
                        object fileobj = (object)file;
                        RemoveDetails(fileobj, RemoveList);
                        experience_years = "";
                        experience_months = "";
                        ++filesProcessed;
                        percentage = (filesProcessed / noOfFiles) * 95;
                        //updating UI about progress
                        worker.ReportProgress((int)percentage, "Extracting(" + filesProcessed + "/" + noOfFiles + ")  " + fileName);
                        addsplitters = true;
                        keywords.Clear();
                        unKnownWords.Clear();
                        cleararrays(ref beforeExperienceStrings, ref afterExperienceStrings, ref nameStrings, ref matchCity);

                    }//loop all selected files (for loop)
                }//end of try 
                catch (IOException ex)
                {
                    System.Windows.Forms.MessageBox.Show("File opened..close it" + ex);
                    return false;
                }
                try
                {

                    csvwriter.Close();
                    // al.CreateZip(DirectoryPath, DirectoryPath + "\\resumes.zip");
                    CreateZip_usingFiles(tempfolderfiles, Path.GetDirectoryName(DestinationPath) + "\\" + Path.GetFileNameWithoutExtension(DestinationPath) + ".zip");
                    worker.ReportProgress(100, "Completed successfully");
                }
                catch (Exception exp)
                {
                    System.Windows.Forms.MessageBox.Show("Exception in creating archieve" + exp);
                    return false;
                }


            }
            System.Windows.Forms.MessageBox.Show(ApplicationStrings.SuccessMessage, ApplicationStrings.ApplicationName,System.Windows.Forms.MessageBoxButtons.OK ,System.Windows.Forms.MessageBoxIcon.Information);
            return true;
        }
        /// <summary>
        /// Insert a word in given array
        /// </summary>
        /// <param name="item">
        /// String to be inserted
        /// </param>
        /// <param name="BeforeExperienceStrings">
        /// Array list contains list of words
        /// </param>
        private void insertinarray(String item, ref ArrayList BeforeExperienceStrings)
        {
            try
            {
                
                for (int i = 10; i > 0; i--)
                {
                    BeforeExperienceStrings[i] = BeforeExperienceStrings[i - 1];
                }
                BeforeExperienceStrings[0] = item;
            }
            catch (Exception e)
            {

            }
        }
        /// <summary>
        /// insert a word in given array
        /// </summary>
        /// <param name="item">
        /// word to be inserted in a arraylist
        /// </param>
        /// <param name="AfterExperienceStrings">
        /// List of array contains keywords
        /// </param>
        private void insertinarray2(String item, ref ArrayList AfterExperienceStrings)
        {
            try
            {
                
                for (int i = 10; i > 0; i--)
                {
                    AfterExperienceStrings[i] = AfterExperienceStrings[i - 1];
                }
                AfterExperienceStrings[0] = item;
            }
            catch (Exception e)
            { }

        }
        /// <summary>
        /// insert in the name in the given list of array
        /// </summary>
        /// <param name="name">
        /// Word to be inserted
        /// </param>
        /// <param name="NameStrings">
        /// List of array contains words
        /// </param>
        private void InsertInName(String name, ref ArrayList NameStrings)
        {
            try
            {
                for (int i = 20; i > 0; i--)
                {
                    NameStrings[i] = NameStrings[i - 1];
                }
                NameStrings[0] = name;
            }
            catch (Exception e)
            { }
        }
        /// <summary>
        /// initializes array
        /// </summary>
        /// <param name="BeforeExperienceStrings">
        /// array to  used to store words before  keyword experience
        /// </param>
        /// <param name="AfterExperienceStrings">
        /// array to  used to store words after  keyword experience
        /// </param>
        /// <param name="NameStrings">
        /// contains the list of names
        /// </param>
        private void initializearray(ref ArrayList BeforeExperienceStrings, ref ArrayList AfterExperienceStrings, ref ArrayList NameStrings)
        {
            try
            {
                for (int i = 0; i <= 12; i++)
                {
                    BeforeExperienceStrings.Insert(i, " ");
                    AfterExperienceStrings.Insert(i, " ");
                }
                for (int i = 0; i <= 20; i++)
                {
                    NameStrings.Insert(i, " ");
                }
            }
            catch (Exception e)
            { }
        }
        /// <summary>
        /// clears all the arrays
        /// </summary>
        /// <param name="BeforeExperienceStrings">
        /// array to  used to store words before  keyword experience
        /// </param>
        /// <param name="AfterExperienceStrings">
        /// array to  used to store words before  keyword experience
        /// </param>
        /// <param name="NameStrings">
        /// array to  used to store words 
        /// </param>
        /// <param name="MatchCity">
        /// array used to store cities that matched in a array
        /// </param>
        private void cleararrays(ref ArrayList BeforeExperienceStrings, ref ArrayList AfterExperienceStrings, ref ArrayList NameStrings, ref ArrayList MatchCity)
        {
            BeforeExperienceStrings.Clear();
            AfterExperienceStrings.Clear();
            NameStrings.Clear();
            MatchCity.Clear();

        }
        /// <summary>
        /// formats the given string check for + in the given string
        /// </summary>
        /// <param name="inputString">
        /// string to be foramtted
        /// </param>
        /// <returns>
        /// retunrns the + removed string 
        /// </returns>
        private String formatString(String inputString)
        {
            int index = -1;
            String outputstring;
            try
            {
                outputstring = inputString.Trim();
                index = outputstring.IndexOf('+');
                if (index >= 0)
                    outputstring = outputstring.Remove(index);
            }
            catch (Exception e)
            {
                outputstring = "";
            }
            return outputstring;

        }
        /// <summary>
        /// writes the given arrays in a new file when file object is given in the parameter
        /// </summary>
        /// <param name="NameStrings">
        /// list of names to be wrttien
        /// </param>
        /// <param name="Mailid">
        /// List of mail ids extracted from the file
        /// </param>
        /// <param name="MatchCity">
        /// cities matched with predefined well known cities in india
        /// </param>
        /// <param name="ExperienceFound">
        /// boolean variable tells whether experience word is found or not
        /// </param>
        /// <param name="ExperienceYears">
        /// Expereience of person  years
        /// </param>
        /// <param name="ExperienceMonths">
        /// Expereience of person months
        /// </param>
        /// <param name="Sex">
        /// Gender of person
        /// </param>
        /// <param name="PhoneNumber">
        /// Phone numbers read from the file
        /// </param>
        /// <param name="Keywords">
        /// Pre defined keyword matches with resumes
        /// </param>
        /// <param name="UnknownWords">
        /// All unknown words in resume
        /// </param>
        /// <param name="FileName">
        /// Name of the file
        /// </param>
        /// <param name="DestinationPath">
        /// Destination path of the file to be created
        /// </param>
        /// <param name="csvwriter">
        /// File object to write the these data
        /// </param>
        /// <returns>
        /// returns true when the write process is success or else returns false
        /// </returns>
        private bool WriteExtractedStrings(ArrayList NameStrings,ArrayList Mailid,ArrayList MatchCity,bool ExperienceFound,
            String ExperienceYears,String ExperienceMonths,
            String Sex,ArrayList PhoneNumber,ArrayList Keywords, ArrayList UnknownWords,String FileName,String DestinationPath,StreamWriter csvwriter)
        {
           
            try
            {
                

                if (Mailid.Count >= 1)
                {
                    csvwriter.Write(ExtractName(NameStrings, Mailid[0].ToString()) + ",", FileMode.Append, FileAccess.Write);
                }
                else
                {
                    csvwriter.Write(ExtractName(NameStrings, " ") + ",", FileMode.Append, FileAccess.Write);
                }

                if (Mailid.Count > 1)
                {
                    csvwriter.Write("\"", FileMode.Append, FileAccess.Write);
                }
                for (int i = 0; i < Mailid.Count; i++)
                {
                    csvwriter.Write(Mailid[i].ToString(), FileMode.Append, FileAccess.Write);

                    if (i + 1 != Mailid.Count)
                    {
                        csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                    }
                }
                if (Mailid.Count > 1)
                {
                    csvwriter.Write("\",", FileMode.Append, FileAccess.Write);
                }
                else
                {
                    csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                }
                if (Sex != null)
                    csvwriter.Write(Sex.ToString() + ",", FileMode.Append, FileAccess.Write);
                else
                    csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                if (PhoneNumber.Count > 1)
                {
                    csvwriter.Write("\"", FileMode.Append, FileAccess.Write);
                }
                for (int i = 0; i < PhoneNumber.Count; i++)
                {

                    csvwriter.Write(PhoneNumber[i].ToString(), FileMode.Append, FileAccess.Write);
                    if (i + 1 != PhoneNumber.Count)
                    {
                        csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                    }

                }

                if (PhoneNumber.Count > 1)
                {
                    csvwriter.Write("\"", FileMode.Append, FileAccess.Write);
                }


                if (MatchCity.Count > 1)
                {
                    csvwriter.Write(",\"", FileMode.Append, FileAccess.Write);

                }
                else
                {
                    csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                }

                for (int i = 0; i < MatchCity.Count; i++)
                {
                    if (MatchCity[i].ToString().IndexOf(",") > 0)
                    {
                        MatchCity[i] = MatchCity[i].ToString().Remove(MatchCity[i].ToString().IndexOf(","));
                    }

                    csvwriter.Write(MatchCity[i].ToString(), FileMode.Append, FileAccess.Write);
                    if (i + 1 != MatchCity.Count && MatchCity[i].ToString() != "")
                    {
                        csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                    }

                }

                if (MatchCity.Count > 1)
                {
                    csvwriter.Write("\"", FileMode.Append, FileAccess.Write);

                }
                if (ExperienceFound)
                {
                    csvwriter.Write("," + ExperienceYears + ",", FileMode.Append, FileAccess.Write);
                    csvwriter.Write(ExperienceMonths, FileMode.Append, FileAccess.Write);
                   
                }
                else
                {
                    csvwriter.Write(",,", FileMode.Append, FileAccess.Write);
                }
                if (Keywords.Count > 0)
                {
                    if (Keywords.Count > 1)
                    {
                        csvwriter.Write(",\"", FileMode.Append, FileAccess.Write);
                    }
                    else
                    {
                        csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                    }

                    for (int i = 0; i < Keywords.Count; i++)
                    {
                        if (Keywords[i].ToString().IndexOf(",") > 0)
                        {
                            Keywords[i] = Keywords[i].ToString().Remove(Keywords[i].ToString().IndexOf(","));
                        }

                        csvwriter.Write(Keywords[i].ToString(), FileMode.Append, FileAccess.Write);
                        if (i + 1 != Keywords.Count && Keywords[i].ToString() != "")
                        {
                            csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                        }

                    }

                    if (Keywords.Count > 1)
                    {
                        csvwriter.Write("\"", FileMode.Append, FileAccess.Write);

                    }
                }
                if (Keywords.Count == 0)
                {
                    if (UnknownWords.Count > 1)
                    {
                        csvwriter.Write(",\"", FileMode.Append, FileAccess.Write);

                    }
                    else
                    {
                        csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                    }

                    for (int i = 0; i < UnknownWords.Count; i++)
                    {
                        if (UnknownWords[i].ToString().IndexOf(",") > 0)
                        {
                            UnknownWords[i] = UnknownWords[i].ToString().Remove(UnknownWords[i].ToString().IndexOf(","));
                        }

                        csvwriter.Write(UnknownWords[i].ToString(), FileMode.Append, FileAccess.Write);
                        if (i + 1 != UnknownWords.Count && UnknownWords[i].ToString() != "")
                        {
                            csvwriter.Write(",", FileMode.Append, FileAccess.Write);
                        }

                    }

                    if (UnknownWords.Count > 1)
                    {
                        csvwriter.Write("\"", FileMode.Append, FileAccess.Write);

                    }
                }
                csvwriter.Write("," + FileName, FileMode.Append, FileAccess.Write);
                csvwriter.Write("\n", FileMode.Append, FileAccess.Write);
               
                return true;
            }
            catch (Exception exp)
            {
                return false;
            }
        }
    }
    

}
