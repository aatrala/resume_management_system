<?php
							
session_start();
 							
							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Mapa Staffing - Admin</title>

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
				  												

				  <td>
				  </tr>
				   </tbody></table>
	
	                       
		          
                      
			</div>
		<div id="menu">
				<div id="pillmenu">
					<ul class="menu">
						<li class="active item2" id="current"><a href="index.php"><span>Home</span></a></li>
						<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
						<li class="item4"><a href="services.php"><span>Services</span></a></li>
						<li><a href="feedback.php"><span>Feedback</span></a></li>
						<li class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
						<li class="item10"><a href="mapastaffing_help.php"><span>Help</span></a></li>
										
                    </ul>
							  
				</div> 
				
				<div id="search">
						
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
											<li class="active item2" id="current"><a href="index.php"><span>Home</span></a></li>
											<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
											<li class="item4"><a href="services.php"><span>Services</span></a></li>
											<li><a href="feedback.php"><span>Feedback</span></a></li>
											<li class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
											<li class="item10"><a href="mapastaffing_help.php"><span>Help</span></a></li>
											
											
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
										Admin login
									</div>
									<div class="module">
									<div>
										<div>
											<div>
													
													<table class="contentpaneopen" align="center">
														<tbody>
															<tr>
																<td valign="top"><br/>
																	<form name="login" action="admin_login_verification.php" method="post">
																				 <table align="center">
																				   
																				   <tr><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email ID</span></p></td><td><input type="text" onblur="if(this.value=='')this.value='Email ID'" onfocus="if(this.value=='Email ID')this.value=''" value="Email ID" name="username" size="15%"></td></tr>
																				   <tr><td></td></tr>
							<tr><td></td></tr>
																				   <tr><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</span></p></td><td><input type="password" name="password" size="15%" onblur="if(this.value=='')this.value='password'" onfocus="if(this.value=='password')this.value=''" value="password"></td></tr>
																					<tr><td></td><td><?php

																					
																						if(isset($_SESSION["incorrect"]))
																							{
																							    
																								if($_SESSION["incorrect"]=="yes")
																								echo "<font size='2' color='red'>Username or password incorrect</font>";
																								unset($_SESSION["incorrect"]);
																							}
																					?>
																					</td></tr>								</td></tr>
																					<tr><td></td></tr>
							<tr><td></td></tr>
																				   <tr><td align="center" colspan="2"><input type="submit" value="Login" name="submit"></td></tr> 
																				   <tr></tr>
																				   <tr><td></td></tr>
							<tr><td></td></tr>
																				   <tr><td align="center" colspan="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adminforgotpwd.php">Forgot password</a> | <a href="admin_register.php">Sign up</a></font></td></tr> 
																				  
																			  </table>
																			 
																			  
																	</form>
																</td>
															</tr>
															<tr>
																<td valign="top">

																	</td>
															 </tr>
														</tbody>
													</table>
											</div>
										</div>
									</div>
								</div>
										
							     </div>
											
										

											
										
							

							</div>	
<div class="clr">
					</div>							
						</div>
					
						</div>		
							
			</div>
								
							
			<div class="clr"></div>
	

	<div id="footer">
						<p style="text-align: center;">
				&copy; 2010 <a href="http://www.broov.in">Broov Information Services Private Limited</a>. All rights reserved.
			</p>

		</div>
	
         <br/>
       </div>
    </body>
</html>
