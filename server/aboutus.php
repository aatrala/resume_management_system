<?php
							
	session_start();
							
							
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>About us</title>

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
												<li id="current" class="item3"><a href="aboutus.php"><span>About us</span></a></li>
												<li class="active item4"><a href="services.php"><span>Services</span></a></li>
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
																<li id="current" class="item3"><a href="aboutus.php"><span>About us</span></a></li>
																<li class="active item4"><a href="services.php"><span>Services</span></a></li>
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
										<div class="module">
											<div>
												<div>
				
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
	About us</div>
                                 <table class="blog" cellpadding="0" cellspacing="0">
                                     <tr>
	                                    <td valign="top">
					                           <div>
		
                                                   <table class="contentpaneopen">



<tr>
<td valign="top" colspan="2">
<br/>
<p style="text-align: justify;"><span style="font-family: Verdana;">Mapa Staffing is a division of Broov Information Services Private Limited, India.</span></p>

<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">Mapa Staffing focuses on managing resumes for consultancies and providing additional valuable services to consultancies.</span></p>
<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">Following are the types of services that we currently provide to consultancies:

</span></p>
<ul>
<li><p style="text-align: justify;"><span style="font-family: verdana;">Uploading resumes.</span></p></li>
<li><p style="text-align: justify;"><span style="font-family: verdana;">Searching resumes based on location, experience, category, keywords.</span></p></li>

<li><p style="text-align: justify;"><span style="font-family: verdana;">Creating logins for company users.</span></p></li>

</ul>
<br/>

<p style="text-align: justify;"><span style="font-family: verdana;">For any queries, please contact us at <a href="mailto:staffing@broov.in">staffing@broov.in</a></span></p>
 

<p> </p>
<p><span style="font-family: verdana;"><br /></span></p>
<ul>
</ul></td>
</tr>



</table>
<span class="article_separator">&nbsp;</span>
		</div>
		</td>
</tr>

<tr>
	<td valign="top" align="center">
				<br /><br />
	</td>
</tr>
<tr>
	<td valign="top" align="center">
			</td>
</tr>
</table>

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
		<div id="footer">
						<p style="text-align: center;">
				&copy; 2010 <a href="http://www.broov.in">Broov Information Services Private Limited</a>. All rights reserved.
			</p>

		</div>
	
	</div>
</body>
</html>
