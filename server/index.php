<?php
							
session_start();
 if(isset($_SESSION['username']) || isset($_SESSION['cusername']) || isset($_SESSION['ausername']))							
 {
	header('location:home.php');
 }
							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Mapa Staffing - Home</title>
<script type="text/javascript">
var username;
var password;
function getelements()
{
	
	username=document.getElementById("username");
	password=document.getElementById("password");
}
function validate(login)
{
	
	var formok=true;
	if(login.username.value == "Email ID" || login.username.value=="" )
	{
		document.getElementById("usernameerror").style.display='block';
		formok=false;
	}
	else
	{
			document.getElementById("usernameerror").style.display='none';
	}
	if( login.password.value=="password" || login.password.value=="")
	{
		
		document.getElementById("error").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("error").style.display='none';
	}
	
	return formok;
	
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
																			<p style="text-align: justify;"><span style="font-family: Verdana;">Consultancies have always found difficulty in managing the resumes that they have with them. We ourselves had this trouble managing resumes in multiple email ids, machines and hence thought of creating a website which can effectively store the resume for later search and download.

</span></p>
																			<p style="text-align: justify;">&nbsp;</p>
																			<p style="text-align: justify;"><span style="font-family: Verdana;">Mapa Staffing not only allows you to search for resumes within your consultancy but also allows others to search the public resumes available with you.</span></p>
																			<p style="text-align: justify;">&nbsp;</p>
																			<p style="text-align: justify;"><span style="font-family: Verdana;">Mapa Staffing allows consultancy companies to create company user accounts which can search the privately available resumes.</span></p>
																			<p style="text-align: justify;">&nbsp;</p>
																			<p style="text-align: justify;"><span style="font-family: Verdana;">We would appreciate your valuable feedbacks for providing a better service.</span></p>
																			<p style="text-align: justify;">&nbsp;</p>
																			<p style="text-align: justify;"><span style="font-family: Verdana;">If you have any queries. Please feel free to contact us at <a href="mailto:staffing@broov.in">staffing@broov.in</span></a>

</p>
																			<p style="text-align: justify;"><span style="font-family: verdana;"><br></span></p></td>
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
							<div class="column_bottom">
								
								<div>
							
								</div>
								<br>
		
								<div class="module">
									<div>
										<div>
											<div>
													<h3>Consultancy login</h3>
													<table class="contentpaneopen">
														<tbody>
															<tr>
																<td valign="top"><br/>
																	<form name="login" action="consultants_login_verification.php" method="post" onSubmit="return validate(this);">
																				 <table align="center">
																				   
																				   <tr><td><font size="2">Email ID</font></td><td><input type="text" onblur="if(this.value=='')this.value='Email ID'" onfocus="if(this.value=='Email ID')this.value=''" value="Email ID" name="username" id= "username" size="15%"></td></tr>
																				   <tr><td></td><td style="display:none;color:red" id="usernameerror">Enter your username</td></tr>
																				   <tr><td><font size="2">Password</font></td><td><input type="password" name="password" size="15%" onblur="if(this.value=='')this.value='password'" onfocus="if(this.value=='password')this.value=''" id ="password" value="password"></td></tr>
																					<tr><td></td><td><?php

																					
																						if(isset($_SESSION["incorrect"]))
																							{
																								if($_SESSION["incorrect"]=="yes")
																								echo "<font size='2' color='red'>Account not activated</font>";
																								unset($_SESSION["incorrect"]);
																							}
																					?>
																					<?php

																					
																						if(isset($_SESSION["incorrect1"]))
																							{
																								if($_SESSION["incorrect1"]=="yes")
																								echo "<font size='2' color='red'>Username or password incorrect</font>";
																								unset($_SESSION["incorrect1"]);
																							}
																					?>
																					</td></tr>
																					<tr><td></td><td style="display:none;color:red" id="error">Enter your password </td></tr>
																				   <tr><td align="center" colspan="2"><input type="submit" value="Login" name="submit" ></td></tr> 
																				   <tr><td align="center" colspan="2"><font size="2"><a href="consultantforgotpwd.php">Forgot password</a> | <a href="consultants_register.php">Sign up</a></font></td></tr> 
																				  
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
								</div>
								<div id="rightcolumn">
						          <div class="column_top">
							<div class="column_bottom">
								
								<div>
							
								</div>
								<br>
								<div class="module">
									<div>
										<div>
											<div>
													<h3>Company login</h3>
													<table class="contentpaneopen">
														<tbody>
															<tr>
																<td valign="top"><br/>
																	<form name="companylogin" action="company_login_verification.php" method="post">
																				 <table align="center">
																				   
																				   <tr><td><font size="2">Email ID</font></td><td><input type="text" name="cusername" size="13%" onblur="if(this.value=='')this.value='Email ID'" onfocus="if(this.value=='Email ID')this.value=''" value="Email ID"></td></tr>
																				   <tr><td><font size="2">Password</font></td><td><input type="password" name="cpassword" size="13%" onblur="if(this.value=='')this.value='password'" onfocus="if(this.value=='password')this.value=''" value="password"></td></tr>
																					<tr><td><font size="2">Consultancy</font></td><td><input type ="text" name="cconsultancy" size="13%" onblur="if(this.value=='')this.value='Consultancy name'" onfocus="if(this.value=='Consultancy name')this.value=''" value="Consultancy name"></td></tr>
																					<tr><td></td><td><?php

																					
																						if(isset($_SESSION["cincorrect"]))
																							{
																								if($_SESSION["cincorrect"]=="yes")
																								echo "<font size='2' color='red'>Account not activated</font>";
																								unset($_SESSION["cincorrect"]);
																							}
																					?>
																					<?php

																					
																						if(isset($_SESSION["cincorrect1"]))
																							{
																								if($_SESSION["cincorrect1"]=="yes")
																								echo "<font size='2' color='red'>Username or password incorrect</font>";
																								unset($_SESSION["cincorrect1"]);
																							}
																					?>
																					</td></tr>
																				   <tr><td align="center" colspan="2"><input type="submit" value="Login" name="csubmit" onsubmit="function validate(this);"></td></tr> 
																				  <tr><td align="center" colspan="2"><font size="2"><a href="companyforgotpwd.php">Forgot password</a> | <a href="company_registration.php">Sign up</a></font></td></tr> 
																				  
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
