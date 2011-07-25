<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Forgot password</title>

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
												<li class="item2"><a href="index.php"><span>Home</span></a></li>
												<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
												<li id="current" class="active item4"><a href="services.php"><span>Services</span></a></li>
												<li><a href="feedback.php"><span>Feedback</span></a></li>
									            <li class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
												
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
												<li class="item2"><a href="index.php"><span>Home</span></a></li>
												<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
												<li id="current" class="active item4"><a href="services.php"><span>Services</span></a></li>
												<li><a href="feedback.php"><span>Feedback</span></a></li>
									            <li class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
												
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
	Forgot password?</div>
<table class="blog" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tr>
<td valign="top" colspan="2">
<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">Please enter your username to start the password recovery process.</span></p>

<br/>
<form name="forgotpwd" enctype="multipart/form-data" action="forgotpwd.php" method="post">

          
          

              <table align="center">
                        <tr></tr>
			
                        
                       
						
                        
						<tr><td></td><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your mail ID<font color="red"> * </font></span></p></td><td><input type="mailid" name="mailid"></td><td>
								<lable style="display:none; color:red;" id="lblconfirmpassword" >Re-enter your new password</label>
								
							</td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
                        
                        
                        
                        
                                     
                        <tr><td></td><td></td><td><input type="submit" value="Submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" name="reset"></td></tr> 
						
				  </table>
				  
                   <?php

// Connecting Database 
require_once('class.phpgmailer.php');
$connection=mysql_connect("mapastaffing.db.5974401.hostedresource.com", "mapastaffing", "Broov9927k0712") or die(mysql_error()); 
 mysql_select_db("mapastaffing",$connection) or die(mysql_error()); 

if (isset($_POST['submit'])) 
{
function convert($str,$ky=''){
		if($ky=='')return $str;
		$ky=str_replace(chr(32),'',$ky);//removes the space in the key
		if(strlen($ky)<8)exit('key error');
		$kl=strlen($ky)<32?strlen($ky):32;
		$k=array();for($i=0;$i<$kl;$i++){
		$k[$i]=ord($ky{$i})&0x1F;}
	
		$j=0;for($i=0;$i<strlen($str);$i++){
		$e=ord($str{$i});
		$str{$i}=$e&0xE0?chr($e^$k[$j]):chr($e);
		$j++;$j=$j==$kl?0:$j;}
		return $str;
	}

	$key='broovinformationservices'; // 8-32 characters without spaces*/
	$username = $_POST['mailid'];



	$sql = "SELECT username,password FROM admin_register WHERE username ='".$username."'";
	$result=mysql_query($sql);
 

	$count=mysql_num_rows($result);

	// compare if $count =1 row
	if($count==1){

	$rows=mysql_fetch_array($result);

	// keep password in $your_password
	$mailid=$rows['username'];
	$your_password=$rows['password'];
	
	  
	//decryption
	$password=convert($your_password,$key);
	   $local_body_string= "Email id: ".$_POST['mailid']." \nPassword: ".$password."\n";
      
       $mail = new PHPGMailer();
	$mail->AddAddress($mailid);	
	$mail->Subject="Mail from Forgot password page mapastaffing.in";
	$mail->Body=$local_body_string;
	
	
	$mail->Send();	
			
			 
			  
			  echo "<br/><strong style='color:red;'>Your password has been send to your mail id. Thank you</strong></br>";
			  echo '<br/><a href="admin.php" >Click here to login</a>';		

	}
	else
	{
		echo "<br/><strong style='color:red;'>Sorry,Invalid username</strong></br>";
	}
	    
	}
?>
                  
            

         </form>
<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">For any queries, please contact us at <a href="mailto:staffing@broov.in">staffing@broov.in</a></span></p>
 


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

