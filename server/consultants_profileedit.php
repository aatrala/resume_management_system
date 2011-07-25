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

<title>Consultancy profile edit</title>

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
					<li class="active item2" ><a href="home.php"><span>Home</span></a></li>
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
											<li id="current"><a href="consultants_profile.php"><span>View profile</span></a></li>
											<li><a href="consultants_upload.php"><span>Upload resume</span></a></li>
											<li><a href="consultants_bulk_upload.php"><span>Bulk upload</span></a></li>
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
	Profile edit</div>
	<br/>
	
	
	
<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">
	
         <form name="consultants_profile_edit"  action="consultant_do_profileedit.php" method="post">
<br/>
            
         
			  
				<?php
					include "common_db_code.php";
	code(); 
					$username=$_SESSION['username'];
					if(!isset($_REQUEST['submit']))
					{
					$qry="select * from consultants_register where username = '".$username."'";
					$resultset=mysql_query($qry);
					while($row=mysql_fetch_array($resultset))
						{
							$tempid=$row["ID"];
							$contactperson=$row["contact_person"];
					
							$designation=$row["designation"];
							$companyname=$row["company_name"];
							$companyaddress=$row["company_address"];
							$state=$row["state"];
							$pincode=$row["pincode"];
							$phone=$row["phone_number"];
							$mobile=$row["mobile_number"];
							$emailid=$row["emailid"];
							$website=$row["website"];
						}
					echo"
						<table align='center'>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ContactPerson</td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='contactperson' value='$contactperson'></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Designation</td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='designation' value='$designation'></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Companyname</span></p></td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='companyname' value='$companyname'></span></p></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company address</span></p></td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows='5' cols='15' name='companyaddress'>$companyaddress</textarea></span></p></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State</span></p></td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='State' selected='$state'>
                                          <option value='andaman'>Andaman and Nicobar Islands</option>
                                          <option value='andhra'>Andhra Pradesh</option>
                                          <option value='arunachal'>Arunachal Pradesh</option>
                                          <option value='assam'>Assam</option>
                                          <option value='bihar'>Bihar</option>
                                          <option value='chandigarh'>Chandigarh</option>
                                          <option value='chattisgarh'>Chattisgarh</option>
                                          <option value='dadra'>Dadra and Nagar Haveli</option>
                                          <option value='daman and Diu'>Daman and Diu</option>
                                          <option value='delhi'>Delhi</option>
                                          <option value='goa'>Goa</option>
                                          <option value='gujarat'>Gujarat</option>
                                          <option value='haryana'>Haryana</option>
                                          <option value='himachal'>Himachal Pradesh</option>
                                          <option value='kashmir'>Jammu and Kashmir</option>
                                          <option value='jharkhand'>Jharkhand</option>
                                          <option value='karnataka'>Karnataka</option>
                                          <option value='kerala'>Kerala</option>
                                          <option value='lakshadweep'>Lakshadweep</option>
                                          <option value='madhya Pradesh'>Madhya Pradesh</option>
                                          <option value='maharashtra'>Maharashtra</option>
                                          <option value='manipur'>Manipur</option>
                                          <option value='meghalaya'>Meghalaya</option>
                                          <option value='mizoram'>Mizoram</option>
                                          <option value='nagaland'>Nagaland</option>
                                          <option value='orissa'>Orissa</option>
                                          <option value='puduchery'>Puduchery</option>
                                          <option value='punjab'>Punjab</option>
                                          <option value='rajasthan'>Rajasthan</option>
                                          <option value='sikkim'>Sikkim</option>
                                          <option value='tamilnadu'>Tamil Nadu</option>
                                          <option value='tripura'>Tripura</option>
                                          <option value='uttarpradesh'>Uttar Pradesh</option>
                                          <option value='uttaranchal'>Uttaranchal</option>
                                          <option value='bengal'>West Bengal</option>
                                   </select>
							</span></p>	   
							</td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pincode</span></p></td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='pincode' value='$pincode'></span></p></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone number</span></p></td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='phone' value='$phone'></span></p></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile number</span></p></td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='mobile' value='$mobile'></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mail id</span></p></td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='emailid' value='$emailid'></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</span></p></td>
							<td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='website' value='$website'></span></p></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
					
						<tr>
							<td></td>
							<td><input type='submit' name='submit' value='Save'>
								
							</td>
						</tr>
					</table>";
				}
				if(isset($_REQUEST['Msg']))
					{
						$Msg=$_REQUEST['Msg'];
					
					 if($Msg=="True")
						{
							echo  '<br/><strong style="color:red;"> Your resume uploaded successfully.</strong><br>';
						}
					}
				?>
			
		</form>
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
			
		
		
		

