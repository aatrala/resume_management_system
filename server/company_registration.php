<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Company Registration</title>
<script type="text/javascript">
function validate()
{

var formok=true;
	if(document.getElementById("cusername").value=="")
	{
		document.getElementById("lblusername").innerHTML='Enter the username';
		document.getElementById("lblusername").style.display='block';
		formok=false;
	}
	else if(!isEmail(document.getElementById("cusername").value))
	{
		
		document.getElementById("lblusername").innerHTML = 'Enter a valid email id';
		document.getElementById("lblusername").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblusername").style.display='none';
	}
	
	if(document.getElementById("cpassword").value=="")
	{
		document.getElementById("lblpassword").style.display='block';
		formok=false;
	
	}
	else
	{
		document.getElementById("lblpassword").style.display='none';
		
	}
	if(document.getElementById("cconfirmpassword").value=="")
	{
		document.getElementById("lblconfirmpassword").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblconfirmpassword").style.display='none';
	}
	
	
	
	if(document.getElementById("caddress").value=="")
	{
		document.getElementById("lblcompanyaddress").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblcompanyaddress").style.display='none';
	}
	if(document.getElementById("cphonenumber").value=="")
	{
		document.getElementById("lblphonenumber").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblphonenumber").style.display='none';
	}
	
	if(document.getElementById("cwebsite").value=="")
	{
		document.getElementById("lblwebsite").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblwebsite").style.display='none';
	}
	
	if(document.getElementById("cpassword").value!=document.getElementById("cconfirmpassword").value)
	{
		
		document.getElementById("lblpasswordmatch").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblpasswordmatch").style.display='none';
	}
	
	return formok;
}
function isEmail(str)
 {
    var regex = /^[-_.a-z0-9]+@(([-_a-z0-9]+\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i;
    return regex.test(str);
}
function isPhoneKeyStroke(evt)
{
    var charCode = (evt.which)? evt.which : evt.keyCode;
    if(charCode < 32||(charCode>47 && charCode<58)||(charCode==45)||(charCode==43))
        return true;
    else
        return false;
}
function sendRequest() 
{
			
		var checkusername=document.getElementById("cusername").value;
		var xmlhttp;
		if(isEmail(checkusername))
		{	
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
				
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					
				document.getElementById("lblusername").style.display='block';
				
				var textresponse=xmlhttp.responseText;
				if(textresponse=="username is available")
					document.getElementById("lblusername").style.color='green';
				else
					document.getElementById("lblusername").style.color='red';
				document.getElementById("lblusername").innerHTML=xmlhttp.responseText;
				
				
				}
			  }
				xmlhttp.open("GET","checkCompanyAvailability.php?username="+checkusername,true);
				xmlhttp.send();
			
		}else
		{
		document.getElementById("lblusername").style.display='block';
		document.getElementById("lblusername").style.color='red';
		document.getElementById("lblusername").innerHTML='Enter a valid email id';
		
		}
}
function doregistration() 
{
		
		var username=document.getElementById("cusername").value;
		var password=document.getElementById("cpassword").value;
		var companyname=document.getElementById("ccompanyname").value;
		var address=document.getElementById("caddress").value;
		var phonenumber=document.getElementById("cphonenumber").value;
		var website=document.getElementById("cwebsite").value;
		var xmlhttp;
		
		var validated=validate();
		if(validated)
		{	
			sendRequest();
			var availability=document.getElementById("lblusername").innerHTML;
			if(availability=="username is available")
			{
				
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
						{
						
						  if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
								
							document.getElementById("lblsuccess").style.display='block';
							document.getElementById("lnkLogin").style.display='block';
							var textresponse=xmlhttp.responseText;
							if(textresponse=="success")
							
								document.getElementById("lblsuccess").style.color='green';
								document.getElementById("lblsuccess").innerHTML='<br/><strong style="color:green;">We have successfully received your registration request. Our support team will verify your account and get back shortly.</strong><br>';
								document.getElementById("lblusername").innerHTML='';
								
							
								
							
							clearFields();
							return true;
							}
						}
						
					xmlhttp.open("GET","company_do_registration.php?cusername="+username+"&cpassword="+password+"&ccompanyname="+companyname+"&caddress="+address+"&cphonenumber="+phonenumber+"&mobilenumber="+"&cwebsite="+website,true);
					xmlhttp.send();
			        
					
			}
			else
			{
				
				return false;
			}
		}
		else
		{
			return false;
		}
	return false;
			
}
function isIdentical(name)
{
	
	var password=document.getElementById("cpassword").value;
	var confirmPassword=document.getElementById("cconfirmpassword").value;
	if(password!=confirmPassword)
	{
		document.getElementById("lblpasswordmatch").style.display='block';
		document.getElementById("lblpasswordmatch").innerHTML="passwords does not match";
	}else
	{
		document.getElementById("lblpasswordmatch").style.display='none';
	}
	
}
function clearFields()
{
	document.getElementById("cusername").value="";
		document.getElementById("cpassword").value="";
		document.getElementById("cconfirmpassword").value="";
		document.getElementById("ccompanyname").value="";
		document.getElementById("caddress").value="";
		document.getElementById("cphonenumber").value="";
		document.getElementById("cwebsite").value="";
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
                           <td style="padding-top: 8px;"><font size="6" face="" color="#000000;">Mapa Staffing</font>
	                   <br>
					   <br>
					  
 	                   <p align="left"><font size="2" face="verdana" color="#880000">            match performing assets</font></p><p> 
		          </p></td></tr>
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
														<li><a href="contactus.php"><span>Contact us</span></a></li>
														
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
	Company registration</div>
	
	<br/>
	<font color="red">&nbsp;&nbsp;Required *</font>
<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">


						
							<form name="consultants_search" action="company_do_registration.php" method="post" onSubmit="return validate(this);">
							
										<?php
											/*if(isset($_SESSION["cregistration"]))
												{
													if($_SESSION["cregistration"]=="Success")
													{
														echo  '<br/><strong style="color:red;"> Thank You. You have successfully registered.</strong><br>';
														echo '<br/><a href="index.php" >Click here to login</a>';
														unset($_SESSION["cregistration"]);
													}
												}*/
										?>
									<table align="center" width="650px">
									<tr><td>
									<lable style="display:none; color:red;" name="lblsuccess" id="lblsuccess" >check</label>
									</td></tr>
									<tr><td><br/><a href="index.php" style="display:none; " id="lnkLogin" >Click here to login</a></label>
									</td></tr>
									</table>
										<table align="center">
											<tr>
												<td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company Username<font color="red"> * </font></span></p></td>
												<td><input type="text" id="cusername" name="cusername" onkeyup="sendRequest()"/></td>
												<td style="width:150px;">
													<?php
														/*if(isset($_REQUEST["avail"]))
															{	
																if($_REQUEST["avail"]=="false")
																	{
																		echo"<strong style='color:red;'>username already exists</strong>";
																		unset($_SESSION["Availability"]);
																	}
												
															}*/
													?><lable style="display:none; color:red;" name="lblusername" id="lblusername" >Enter the Username</label>
													</td>
											</tr>
											<tr><td></td></tr>
											<tr><td></td></tr>
											<tr>
												<td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password<font color="red"> * </font></span></p></td>
												<td><input type="password" id="cpassword" name="cpassword" /></td><td><lable style="display:none; color:red;" id="lblpassword" >Enter the password</label>
							</td>
											</tr>
											<tr><td></td></tr>
						                    <tr>
							<td></td><td></td><td><lable style="display:none; color:red;" id="lblpasswordmatch" >passwords does not match</label></td>
						</tr>
											<tr>
												<td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm password<font color="red"> * </font></span></p></td>
												<td><input type="password" id="cconfirmpassword" name="cconfirmpassword" onChange="isIdentical(this)"/></td><td>
							<lable style="display:none; color:red;" id="lblconfirmpassword" >Enter the confirm password</label></td>
											</tr>
											<tr><td></td></tr>
						                    <tr><td></td></tr>
											<tr>
												<td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company name</span></p></td>
												<td><input type="text" id="ccompanyname" name="ccompanyname" /></td>
											</tr>
											<tr><td></td></tr>
						                    <tr><td></td></tr>
											<tr>
												<td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address<font color="red"> * </font></span></p></td>
												<td><textarea cols="20" rows="5" id="caddress" name="caddress"></textarea></td><td><lable style="display:none; color:red;" id="lblcompanyaddress" >Enter the companyaddress</label></td>
											</tr>
											<tr><td></td></tr>
											<tr><td></td></tr>
											<tr>
												<td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact number<font color="red"> * </font></span></p></td>
												<td><input type="text" id="cphonenumber" name="cphonenumber" onkeypress="return isPhoneKeyStroke(event);"/></td><td><lable style="display:none;color:red;" id="lblphonenumber" >Enter the contact number</label>
							</td>
											</tr>
											<tr><td></td></tr>
											<tr><td></td></tr>
											<tr>
												<td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website<font color="red"> * </font></span></p></td>
												<td><input type="text" id="cwebsite" name="cwebsite" /></td><td><lable style="display:none; color:red;" id="lblwebsite" >Enter the website</label>
							</td>
											</tr>
											<tr><td></td></tr>
											<tr><td></td></tr>
											<tr>
												<td></td>
												<td>
														<input type="button" value="Submit" onClick="doregistration()" />
													<input type="reset" name="reset" value="Reset"/>
												</td>
											<tr>
									</table>
										
							
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
			
					
							
