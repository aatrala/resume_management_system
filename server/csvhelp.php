<?php
							
	session_start();
	$username=$_SESSION["username"];
	if($username==null or $username=="")
	{
		header('location:index.php');
		
	}						
							
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
<title>Csv help</title>

  

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
	Csv help</div>
	
	<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">What is CSV?</span></p>
<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">CSV stands for Comma Separated Values, 
sometimes also called Comma Delimited. A CSV file is a specially formatted plain text file which stores 
spreadsheet or basic database-style information in a very simple format, with one record on each line. 
</span></p>
<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">Fields that contain a special character (comma, newline, or double quote), must be enclosed in double quotes. 
However, if a line contains a single entry which is the empty string, it may be enclosed in double quotes. 
If a field's value contains a double quote character it is escaped by placing another double quote character 
next to it.</span></p>
<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">Note:</span></p>
<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">1.Create a CSV file using Notepad or TextEdit.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana;">2.The record format should be Job seeker name, 
Job seeker mailid, Contact number, City, Experience in years, Experience in months, Technology, 
and Name of the resume. Fields should be separated by commas.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana;">(Ex:John,john@gmail.com,9005645453,Bangalore,4,5,"php,joomla",john.doc)</span></p>
<p style="text-align: justify;"><span style="font-family: verdana;">3.Change the "Save as type" option to 'All Files' and save the file with .csv extension</span></p>
<p style="text-align: justify;"><span style="font-family: verdana;">4.Now upload your CSV file by clicking browse button in 'Bulk upload' page.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana;">5.Make the resumes in a .zip or .rar format and upload it by clicking browse button in 'Bulk upload' page.</span></p>


<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">



                 
       
                   

      
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
