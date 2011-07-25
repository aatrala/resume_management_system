<?php
							
session_start();
						
							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Mapa Staffing - Home</title>


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
						<li class="active item2" id="current"><a href="home.php"><span>Home</span></a></li>
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
											<li class="active item2" id="current"><a href="home.php"><span>Home</span></a></li>
											<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
											<li class="item4"><a href="services.php"><span>Services</span></a></li>
											<li><a href="feedback.php"><span>Feedback</span></a></li>
											<li class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
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
										Home
									</div>
								<table cellspacing="0" cellpadding="0" class="blog">
									
											<tr>
												<td valign="top">
																<div>
													
																	<table class="contentpaneopen">
																		<tr>
																			<td valign="top" colspan="2">
																			<br/>
																				<p style="text-align: justify;">
																				<span style="font-family: Verdana;">
																					Consultancies have always found difficulty
																					in managing the resumes that they have with 
																					them. We ourselves had this trouble managing
																					resumes in multiple email ids, machines and 
																					hence thought of creating a website which can 
																					effectively store the resume for later search 
																					and download.

																				</span>
																				</p>
																				<p style="text-align: justify;">
																					&nbsp;
																				</p>
																				<p style="text-align: justify;">
																					<span style="font-family: Verdana;">
																						Mapa Staffing not only allows you to 
																						search for resumes within your consultancy 
																						but also allows others to search the public 
																						resumes available with you.
																					</span>
																				</p>
																				<p style="text-align: justify;">
																					&nbsp;
																				</p>
																				<p style="text-align: justify;">
																					<span style="font-family: Verdana;">
																						Mapa Staffing allows consultancy companies to 
																						create company user accounts which can search 
																						the privately available resumes.
																					</span>
																				</p>
																				<p style="text-align: justify;">&nbsp;</p>
																				<p style="text-align: justify;">
																					<span style="font-family: Verdana;">
																						We would appreciate your valuable feedbacks for 
																						providing a better service.
																					</span>
																				</p>
																				<p style="text-align: justify;">&nbsp;</p>
																				<p style="text-align: justify;">
																					<span style="font-family: Verdana;">
																						If you have any queries. Please feel 
																						free to contact us at 
																						<a href="mailto:staffing@broov.in">
																						staffing@broov.in
																					</span></a>
																				</p>
																			<p style="text-align: justify;">
																				<span style="font-family: verdana;">
																					<br>
																				</span>
																			</p>
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
