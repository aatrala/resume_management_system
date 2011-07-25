<?php
							
session_start();
 							
							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  <script type="text/javascript">
<!--
function showHide(elementid){
if (document.getElementById(elementid).style.display == 'none'){
document.getElementById(elementid).style.display = '';

} else {
document.getElementById(elementid).style.display = 'none';

}
} 
//-->
</script>
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Mapa Staffing - Help</title>


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
				 
									
	     	     
				  <?php
						if(isset($_SESSION['cusername']))
                                                {
													$user=$_SESSION['cusername'];
												  echo " <p style='float:right'>$user |&nbsp;<font face='verdana' style='size:11px;'><a href='logout.php'>Logout</a></font></p>";
                                                 }							
													
													
						    
				  ?>		
				  <?php	                     
						if(isset($_SESSION['ausername']))
                                                {
													$user=$_SESSION['ausername'];
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
						<?php
															$pagename;
															if(isset($_SESSION['username']))
															{
																$pagename="home.php";
															}
															else
															{
															$pagename="index.php";
															}
															
															echo "
																<li class='item2'><a href='$pagename'><span>Home</span></a></li>";
																?>
						<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
						<li class="item4"><a href="services.php"><span>Services</span></a></li>
						<li><a href="feedback.php"><span>Feedback</span></a></li>
						<li class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
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
											<?php
															$pagename;
															if(isset($_SESSION['username']))
															{
																$pagename="home.php";
															}
															else
															{
															$pagename="index.php";
															}
															
															echo "
																<li class='item2'><a href='$pagename'><span>Home</span></a></li>";
																?>
											<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
											<li class="item4"><a href="services.php"><span>Services</span></a></li>
											<li><a href="feedback.php"><span>Feedback</span></a></li>
											<li class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
											<li class="item10"><a href="mapastaffing_help.php"><span>Help</span></a></li>
											<?php
						                        if(isset($_SESSION['username']))
                                                {
                                                    echo "
													 <li><a href='consultants_profile.php'><span>View profile</span></a></li>
													<li><a href='consultants_upload.php'><span>Upload resume</span></a></li>
													<li><a href='consultants_bulk_upload.php'><span>Bulk upload</span></a></li>
													<li><a href='consultants_company_registration.php'><span>Register a company</span></a></li>
													<li><a href='consultant_activation.php?start=0&p_f=0'><span>Consultant activation</span></a></li>
													<li><a href='consultants_search.php'><span>Search</span></a></li> 
													<li><a href='consultants_changepwd.php'><span>Change password</span></a></li>";
													
						                        }
						                     ?>
											 <?php
						                        if(isset($_SESSION['cusername']))
                                                {

                                                    echo "<li><a href='company_user_search.php'><span>Search</span></a></li>
													 <li><a href='company_changepwd.php'><span>Change password</span></a></li>";
													
													
						                        }
						                     ?>
											 <?php	                     
						                       if(isset($_SESSION['ausername']))
											   {
											    echo "
											<li><a href='admin_activation.php'><span>Consultant activation</span></a></li>
											<li><a href='admin_changepwd.php'><span>Change password</span></a></li>";
											}
											?>
											
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
										
							<div id="maincolumn">
								
								<div class="nopad">				
									
									<div class="componentheading">
										Mapa Staffing - Help
									</div>
								<table cellspacing="0" cellpadding="0" class="blog" >
									
											<tr>
												<td valign="top">
																<div>
													
																	<table class="contentpaneopen">
																		<tr>
																			<td valign="top" colspan="2">
																			
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div1')">Signing in </A>
																					<div id="div1" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						1.If you already have a Mapa staffing account, you can use your username and password to sign in to your account.<br/>
																						2.If you have an consultancy account, use your consultancy mailid and password to sign in to your account.<br/>
																						3.If you have an company account, use your company mailid and password to sign in to your account.<br/>
																																												
																					</div></span></p>
																				
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div2')"> Creating an Consultancy Account</A>
																					<div id="div2" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						Create a new consultancy account which gives access to Mapa staffing services. If you already have a Consultancy Account, 
																						you can sign in with username and password.  
																					</div></span></p>
																			
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div3')">Forgot password</A>
																					<div id="div3" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						To recover your password, please begin with these steps:<br/>
																						   1. Visit our Forgot password page.<br/>
																						   2. Enter your username(Mailid).<br/>
																						   3. Click Submit. <br/>
																						   4. Your Password will be send to your mailid.<br/>
																						   5. Now you can signin to your account by giving username and password.
																						 
																						
																					</div></span></p>
																					
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div4')"> Edit your profile</A>
																					<div id="div4" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						To edit the profile use our <a href="consultants_profileedit.php">edit link</a> 
																						contains the detials you specified at time of registration. You save your profile once you complete edit.
																					</div></span></p>
																					
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div5')"> Upload resumes</A>
																					<div id="div5" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						To attach a resume follow these steps:<br/>
																						   1. Please specify all the required fields in the page.<br/>
																						   2. Click Browse, to upload a resume.<br/>
																						   3. Browse through your files and click the name of the file you'd like to upload.<br/>
																						   4. Click submit. <br/><br/>
																						<b>Keywords:</b><br/>
																							1.Candidates are searched based on the keywords specified while uploading the file.<br/>
																							2.Candidates technology areas like programming languages,certifications can be specified as the keywords.<br/>
																							3.Allows the user to search the resumes based on technology.<br/><br/>
																						<b>Status of resume:</b><br/>
																							1.It shows the current status of the resume(Active or InActive).<br/>
																							2.If the status is Active, the resume will be shown to other companies,consultancies.<br/>
																							  candidates those who are seeking for a job currently can be specified as an active resume.
																							3.If the status is InActive, the resume will not be shown to other companies,consultancies.<br/>
																							  candidates those who have got place through consultancy can be specified as an Inactive resume.<br/><br/>
																						<b>Access:</b><br/>
																							<u>Private</u><br/>
																								Once the resume is specified as an private by consultancy, it will be viewed only by the respective consultancy.<br/>
																							<u>Protected</u><br/>
																								Once the resume is specified as an protected by consultancy, it will be viewed by the respective consultancy and the company which is been created by the consultancy.<br/>
																							<u>Public</u><br/>
																								Once the resume is specified as an public by consultancy, it will be viewed by all consultancies as well as companies.<br/>
																							
																					</div></span></p>
																			
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div6')"> Bulk upload</A>
																					<div id="div6" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						<p style="text-align: justify;"><span style="font-family: verdana;">What is CSV?</span></p>

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
																					</div></span></p>
																				
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div7')"> Creating an account for company</A>
																					<div id="div7" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						Create a new company account which gives access to Mapa staffing services. If you already have a Company Account, 
																						you can sign in with username and password.  
																					</div></span></p>
																			
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div8')"> Activating Company Accounts</A>
																					<div id="div8" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						1.Once the consultants sign in to their account, they can Active or InActive the company which have been created by them.<br/>
																						2.The company can signin once it get activated by the consultancy.<br/>
																					</div></span></p>
																				
																				<p style="text-align: justify; margin:20px;"><span style="font-family: verdana;"><A HREF="javascript:showHide('div9')">Search</A>
																					<div id="div9" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						1.Consultancy or company can search resumes based on Keywords(EX:Name of the technology), Location, Sex, Experience.<br/>
																						2.Based on search, the results will be displayed.
																						
																					</div></span></p>
																				
																				<p style="text-align: justify;margin:20px; "><span style="font-family: verdana;"><A HREF="javascript:showHide('div10')">Change password</A>
																					<div id="div10" style="border: 1px solid rgb(216, 208, 217); padding: 4px; background-color:#f7fafd;">
																						   1. Sign in to your account.<br/>
																						  
																						   2. Click Change password option from the menu.<br/>
																						  
																						   3. Enter your current password and your new password.<br/>
																						   4. Click submit. So that your password get change.<br/>
																						   5. Now you can signin to your account by giving username and password.<br/>
																						   
																						
																					</div></span></p>
																					
																						
																						
																																										
																			</td>
																			</tr>



																		
																	</table>
																	<span class="article_separator">&nbsp;</span>
																</div>
												</td>
											</tr>

											
										
								</table>

							</div>		
						</div>
					<div id="rightcolumn">
						<div class="column_top">
						
								</div>
								</div>
								<div id="rightcolumn">
						          <div class="column_top">
							
						</div>
						</div>
							
					
					<div class="clr">
					</div>
					</div>
						</div>		
				
			</div>
			<div class="clr"></div>
	</div>
	</div>
	<div id="footer">
						<p style="text-align: center;">
				&copy; 2010 <a href="http://www.broov.in">Broov Information Services Private Limited</a>. All rights reserved.
			</p>

		</div>
	</div>
         <br/>
        </div>
    </body>
</html>
