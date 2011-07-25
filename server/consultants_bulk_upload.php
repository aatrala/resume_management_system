<?php
							
	session_start();
							
							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />
<style>
div#maincolumn1 {
float:left;
width:650px;
}
</style>
<title>Consultancy File Upload</title>
<script type="text/javascript">


var hash = {
  '.csv' : 1,
  '.txt' : 1,
  '.rar' : 1, 
  '.zip' : 1,
};
function check_extension(filename,submitId) {
      var re = /\..+$/;
      var ext = filename.match(re);
	  //alert(ext);
      var submitEl = document.getElementById(submitId);
      if (hash[ext]) {
	
        submitEl.disabled = false;
        return true;
      } else {
       	document.getElementById("lblfile").style.display='block';
        submitEl.disabled = true;

        return false;
      }
}
function check_extensionof(filename,submitId) {
      var re = /\..+$/;
      var ext = filename.match(re);
	  //alert(ext);
      var submitEl = document.getElementById(submitId);
      if (hash[ext]) {
	
        submitEl.disabled = false;
        return true;
      } else {
       	document.getElementById("lblfile").style.display='block';
        submitEl.disabled = true;

        return false;
      }
}
</script>
  

</head>
   <body id="page_bg">
	<div id="container">
	<div id="title">
		
<table>
                         <tbody><tr>
                           <td>
                             <img src="images/logo3.gif">
                           </td>
                           <td style="padding-top: 8px; width:300px;"><font size="6" face="" color="#000000;">Mapa Staffing</font>
	                   <br><br>
					    
 	                   <p align="left"><font size="2" face="verdana" color="#880000">            match performing assets</font></p>
					   <p> 
		          </p>
				  
				  
				  </td>
				  <td style="width:710px;">
				   <br><br>
				   <?php	                     
						 if(isset($_SESSION['username']))
                                                {
													$user=$_SESSION['username'];
												  echo " <p style='float:right'>$user |&nbsp;<font face='verdana' style='size:11px;'><a href='logout.php'>Logout</a></font></p>";
                                                 }												
	                        ?>	
				  <td>
				  </tr>
				   </tbody></table>
	               
	</div>

	<div id="menu">
			<div id="pillmenu">
				<ul class="menu">
					<li class="active item2"><a href="home.php"><span>Home</span></a></li>
											<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
											<li class="item4"><a href="services.php"><span>Services</span></a></li>
											<li><a href="feedback.php"><span>Feedback</span></a></li>
											<li><a href="contactus.php"><span>Contact us</span></a></li>
											<li class="item10"><a href="mapastaffing_help.php"><span>Help</span></a></li>
											
				</ul>
			</div>
			
	</div>
	<div id="wrapper">	
						<div id="leftcolumn">
				<div class="column_top">
					<div class="column_bottom">
								<div class="module_menu">
			<div>
				<div>
					<div>
													<h3>Main Menu</h3>
											<ul class="menu">
											<li class="active item2"><a href="home.php"><span>Home</span></a></li>
											<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
											<li class="item4"><a href="services.php"><span>Services</span></a></li>
											<li><a href="feedback.php"><span>Feedback</span></a></li>
											<li><a href="contactus.php"><span>Contact us</span></a></li>
											<li><a href="consultants_profile.php"><span>View profile</span></a></li>
											<li><a href="consultants_upload.php"><span>Upload resume</span></a></li>
											<li id="current"><a href="consultants_bulk_upload.php"><span>Bulk upload</span></a></li>
											<li><a href="consultants_company_registration.php"><span>Register a company</span></a></li>	
											<li><a href="consultant_activation.php?start=0&p_f=0"><span>Consultant activation</span></a></li>
											<li class="item3"><a href="consultants_search.php"><span>Search</span></a></li>
											<li><a href="consultants_changepwd.php"><span>Change password</span></a></li>
											
											</ul>
										</div>
				</div>
			</div>
		</div>
			
	
				</div>
				</div>
			</div>
	<div id="holder">
				<div id="holder1">
					<div id="newsflash">
						
					</div>
					<div id="popular">
						
					</div>

								
					<div id="maincolumn1">
						
						<div class="nopad">				
							
															<div class="componentheading">
	File Upload</div>
	
	<br/>
<font color="red">&nbsp;&nbsp;Required *</font>
<p style="float:right"><font face="verdana"><a href="csvhelp.php">Csv help</a></font></p>
<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">


<form name="consultants_bulk_upload" enctype="multipart/form-data" action="consultants_bulk_upload.php" method="post" onSubmit="return validate(this);">
				
           <br/>
		
                  <table width="650px">
                      <tr></tr>
						
						
						 <tr><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload csv file<font color="red"> * </font></span></p></td><td>
						 <input type="file"  id="csvfile" name="csvfile" onchange="check_extensionof(this.value,'submit');"/><br/><br/></td><td><lable style="display:none; color:red;" id="lblfile" >Invalid file type</label></td></tr>
                         <tr><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload resume<font color="red"> * </font></span></p></td><td>
						 <input type="file"  id="file" name="file" onchange="check_extension(this.value,'submit');"/><br/><br/>Upload (rar, zip)</td><td><lable style="display:none; color:red;" id="lblfile" >Invalid file type</label></td></tr>
                        <tr></tr><tr></tr><tr></tr>
                        <tr><td></td><td><input type="submit" value="Submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" name="reset"></td></tr> 
                  </table>
                 </form>  
                  <?php
						include "common_db_code.php";
						code();
						if(!isset($_SESSION["username"]))
						{
								header('location:index.php');
						}else
						{
					
							$username=$_SESSION["username"];
							if (isset($_POST['submit'])) 
							{
								
								//$zipfilename=$_POST["file"];
								//$csvfilename=$_POST["csvfile"];
								$Fields= array("Name","E-mailid","Gender","Phone number","Location","Experience Years","Experience Months","Search Keywords");
								$tmpname=$_FILES["file"]["tmp_name"];
								$name=$_FILES["file"]["name"];
								$type=$_FILES["file"]["type"];
								$size=$_FILES["file"]["size"];
								$target_path = "uploaded_resumes/";
								$zipfilename = addslashes(date("d_m_Y_H_i_s").'_'.$name);
								
								copy($tmpname,$target_path.$zipfilename);
								
								$tmpname=$_FILES["csvfile"]["tmp_name"];
								$name=$_FILES["csvfile"]["name"];
								$type=$_FILES["csvfile"]["type"];
								$size=$_FILES["csvfile"]["size"];
								$target_path = "uploaded_resumes/";
								$csvfilename = addslashes(date("d_m_Y_H_i_s").'_'.$name);
								$today = date('Y-m-j');
								copy($tmpname,$target_path.$csvfilename);
								$zip_dir = "uploaded_resumes/";
								$zip = zip_open($zip_dir.$zipfilename);
								$filepointer = fopen($zip_dir.$csvfilename,'r') or die("can't open file");
								if ($zip) 
								{
									while ($zip_entry = zip_read($zip) and $csv_line = fgetcsv($filepointer,1024)) 
									{

										$file = basename(zip_entry_name($zip_entry));
										$timeStamp=date("d_m_Y_H_i_s");
										$filename = addslashes($timeStamp.'_'.$file);
										$fp = fopen($zip_dir.basename($filename), "w+");
										
										if (zip_entry_open($zip, $zip_entry, "r")) 
										{
											$buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
											zip_entry_close($zip_entry);
										}
										
										fwrite($fp, $buf);
										fclose($fp);
										$name=$csv_line[0];
										$mailid=$csv_line[1];
										$sex=$csv_line[2];
										$phno=$csv_line[3];
										$location=$csv_line[4];
										$years=$csv_line[5];
										$months=$csv_line[6];
										$keywords=$csv_line[7];
										$file1=$csv_line[8];
										$message="<br/>";
										for($i=0;$i<=7;$i++)
										{
											if(strlen($csv_line[$i])==0)
												$message.=$Fields[$i].",";
											
										}
										
										if(strlen($message)>5)
										{
											$message=substr($message,0,strlen($message)-1);
											echo $message." detail(s) are missing in file ".$file1.".<br/> Please fill those details for better search";
										}
										echo "$file1";
										$qry="insert into consultants_upload (jobseeker_name,jobseeker_mailid,sex,jobseeker_mobileno,location,experience_years,experience_months,keywords,file,consultantusername,UploadedOn) values ('$name','$mailid','$sex','$phno','$location','$years','$months','$keywords','$filename','$username','$today')";
										//echo $qry;
										mysql_query($qry);
										//echo "<br/> inserted a record";
										//echo "The file ".$file." was extracted to dir ".$zip_dir."\n<br>";
									}
									//fclose($filepointer); 
									zip_close($zip);
								}
									echo  '<br/><strong style="color:red;"> Your resume uploaded successfully.</strong><br>';	
							}		
						}
						?>
						
       
                   

      
<br>

 


</td>
</tr>



</tbody></table>
<span class="article_separator">&nbsp;</span>
		</div>
		</td>
</tr>

<tr>
	<td align="center" valign="top">
				<br><br>
	</td>
</tr>
<tr>
	<td align="center" valign="top">
			</td>
</tr>
</tbody></table>

													</div>		
					</div>

										<div id="rightcolumn">
						<div class="column_top">

						</div>

					</div>
						
										<div class="clr"></div>
							
			</div>
			</div>
         <div class="clr"></div>
		 </div>
		 <br/>
		 <div id="footer">
						<p style="text-align: center;">
				&copy; 2010 <a href="http://www.broov.in">Broov Information Services Private Limited</a>. All rights reserved.
			</p>

		</div>
		 </div>
		 
    </body>
</html>
