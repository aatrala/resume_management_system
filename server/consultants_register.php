<?php
     session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
<script type="text/javascript">

function validate()
{
	
	
	var formok=true;
	if(document.getElementById("username").value=="")
	{
		document.getElementById("lblusername").innerHTML='Enter the username';
		document.getElementById("lblusername").style.display='block';
		document.getElementById("lblusername").style.color='red';
		formok=false;
	}
	else if(!isEmail(document.getElementById("username").value))
	{
		document.getElementById("lblusername").innerHTML = 'Enter a valid email id';
		document.getElementById("lblusername").style.color='red';
		document.getElementById("lblusername").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblusername").style.display='none';
	}
	if(document.getElementById("password").value=="")
	{
		document.getElementById("lblpassword").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblpassword").style.display='none';
		
	}
	if(document.getElementById("confirmpassword").value=="")
	{
		document.getElementById("lblconfirmpassword").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblconfirmpassword").style.display='none';
		
	}
	if(document.getElementById("companyname").value=="")
	{
		document.getElementById("lblcompanyname").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblcompanyname").style.display='none';
		
	}
	if(document.getElementById("contactperson").value=="")
	{
		document.getElementById("lblcontactperson").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblcontactperson").style.display='none';
		
	}
	if(document.getElementById("designation").value=="")
	{
		document.getElementById("lbldesignation").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lbldesignation").style.display='none';
		
	}
	
	if(document.getElementById("companyaddress").value=="")
	{
		
		document.getElementById("lblcompanyaddress").style.display='block';
		formok=false;
		
	}
	else
	{
		
		document.getElementById("lblcompanyaddress").style.display='none';
		
	}
	if(document.getElementById("pincode").value=="")
	{
		document.getElementById("lblpincode").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblpincode").style.display='none';
		
	}
	if(document.getElementById("phonenumber").value=="")
	{
		document.getElementById("lblphonenumber").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblphonenumber").style.display='none';
		
	}
	if(document.getElementById("mobilenumber").value=="")
	{
		document.getElementById("lblmobilenumber").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblmobilenumber").style.display='none';
		
	}
	if(document.getElementById("website").value=="")
	{
		document.getElementById("lblwebsite").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblwebsite").style.display='none';
		
	}
	if(document.getElementById("password").value!=document.getElementById("confirmpassword").value)
	{
		
		document.getElementById("lblpasswordmatch").style.display='block';
		formok=false;
		
	}
	else
	{
		document.getElementById("lblpasswordmatch").style.display='none';
		
	}
	document.getElementById("lblsuccess").style.display='none';
	document.getElementById("lnkLogin").style.display='none';
	return formok;
	
}
function isPhoneKeyStroke(evt)
{
    var charCode = (evt.which)? evt.which : evt.keyCode;
    if(charCode < 32||(charCode>47 && charCode<58)||(charCode==45)||(charCode==43))
        return true;
    else
        return false;
}
function isEmail(str)
 {
    var regex = /^[-_.a-z0-9]+@(([-_a-z0-9]+\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i;
    return regex.test(str);
}
function isCharKeyStroke(evt)
 {
    var carCode = (evt.which) ? evt.which : event.keyCode
    if ((carCode > 32 && carCode < 65) || (carCode > 90 && carCode < 97) || (carCode > 122)) 
	{
        return false;
    } 
	else 
	{
        return true;
    }
}
function isIdentical(name)
{
	
	var password=document.getElementById("password").value;
	var confirmPassword=document.getElementById("confirmpassword").value;
	if(password!=confirmPassword)
	{
		document.getElementById("lblpasswordmatch").style.display='block';
		document.getElementById("lblpasswordmatch").innerHTML="passwords does not match";
	}else
	{
		document.getElementById("lblpasswordmatch").style.display='none';
	}
	
}
function sendRequest() 
{
			
		var checkusername=document.getElementById("username").value;
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
				xmlhttp.open("GET","checkAvailability.php?username="+checkusername,true);
				xmlhttp.send();
			
		}else
		{
		document.getElementById("lblusername").style.display='block';
		document.getElementById("lblusername").style.color='red';
		document.getElementById("lblusername").innerHTML='Enter a valid email id';
		
		}
}
function clearFields()
{
	document.getElementById("username").value="";
	document.getElementById("password").value="";
	document.getElementById("confirmpassword").value="";
	document.getElementById("companyname").value="";
	document.getElementById("contactperson").value="";
	document.getElementById("designation").value="";
	document.getElementById("companyaddress").value="";
	document.getElementById("State").value="";
	document.getElementById("pincode").value="";
	document.getElementById("phonenumber").value="";
	document.getElementById("mobilenumber").value="";
	document.getElementById("website").value="";
}
function doregistration(registration) 
{
		
		var username=document.getElementById("username").value;
		var password=document.getElementById("password").value;
		var companyname=document.getElementById("companyname").value;
		var contactperson=document.getElementById("contactperson").value;
		var designation=document.getElementById("designation").value;
		var companyaddress=document.getElementById("companyaddress").value;
		var State=document.getElementById("State").value;
		var pincode=document.getElementById("pincode").value;
		var phonenumber=document.getElementById("phonenumber").value;
		var mobilenumber=document.getElementById("mobilenumber").value;
		var website=document.getElementById("website").value;
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
						
					xmlhttp.open("GET","consultants_registration.php?username="+username+"&password="+password+"&companyname="+companyname+"&contactperson="+contactperson+"&designation="+designation+"&companyaddress="+companyaddress+"&State="+State+"&pincode="+pincode+"&phonenumber="+phonenumber+"&mobilenumber="+mobilenumber+"&website="+website,true);
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
					
				
				

</script>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Consultancy Registration</title>

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
	Consultants registration</div>
<br/>
<font color="red">&nbsp;&nbsp;Required *</font>
	<br/>
	<br/>
<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">


         <form name="consultants_register"  method="post">
           
           
			   <?php
						if(isset($_SESSION["registration"]))
							{
								if($_SESSION["registration"]=="Success")
								{
									echo  '<br/><strong style="color:green;"> We have successfully received your registration request. Our support team will verify your account and get back shortly.</strong><br>';
									echo '<br/><a href="index.php" >Click here to login</a>';
									unset($_SESSION["registration"]);
								}
							}
						?>
				<table align="center" width="650px">
				<tr><td>
				<lable style="display:none; color:red;" name="lblsuccess" id="lblsuccess" >check</label>
				</td></tr>
				<tr><td><br/><a href="index.php" style="display:none; " id="lnkLogin" >Click here to login</a></label>
				</td></tr>
				</table>
				
                <table align="center" width="650px">
                        <tr></tr>
						
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;"><span style="font-family: verdana;">
										Email ID<font color="red"> * </font></span>
								</p>
							</td>
							<td>
								<input type="text" name="username" id="username" onkeyup="sendRequest()">
							</td>
							<td style="width:150px;">
								<?php
									
									/*if(isset($_SESSION["Availability"]))
										{	
											if($_SESSION["Availability"]=="no")
												{
													echo"<strong style='color:red;'>username already exists</strong>";
													unset($_SESSION["Availability"]);
												}
											
										}*/
								?>
								<lable style="display:none; color:red;" name="lblusername" id="lblusername" >Enter the Username</label>
								<lable style="display:none;color:red;" name="lblusernameavailability" id="lblusernameavailability" >Enter the Username</label>
							</td>
						</tr>
						
						<tr><td></td></tr>
						<tr><td></td></tr>
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;"><span style="font-family: verdana;">
								Password<font color="red"> * </font></span>
								</p>
							</td>
							<td>
								<input type="password" name="password" id="password">
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblpassword" >Enter the password</label>
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td><td></td><td></td><td><lable style="display:none; color:red;" id="lblpasswordmatch" >passwords does not match</label></td>
						</tr>
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify; ">
									<span style="font-family: verdana;">
										Confirm password<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input type="password" name="confirmpassword" id="confirmpassword" onChange="isIdentical(this)">
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblconfirmpassword" >Enter the confirm password</label>
								
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										Company name<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input type="text" name="companyname" id="companyname" >
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblcompanyname" >Enter the company name</label>
							</td>
						</tr>  			
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
											Contact person name<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input type="text" name="contactperson" id="contactperson" onkeypress="return isCharKeyStroke(event)" >
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblcontactperson" >Enter the contact person name</label>
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										Designation<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input type="text" name="designation" id="designation" onkeypress="return isCharKeyStroke(event)" >
							</td>
							<td>
								<lable style="display:none; color:red;" id="lbldesignation" >Enter the designation</label>
							</td>
						</tr>
                        <tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                                               
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;" >
											Company address<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<textarea cols="20" rows="5" id="companyaddress" name="companyaddress"></textarea>
								
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblcompanyaddress">Enter the companyaddress</label>
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
							
										State
									</span>
								</p>
							</td>
                            <td>
                                <select name="State" id="State">
									  <option value="andaman">Andaman and Nicobar Islands</option>
									  <option value="andhra">Andhra Pradesh</option>
									  <option value="arunachal">Arunachal Pradesh</option>
									  <option value="assam">Assam</option>
									  <option value="bihar">Bihar</option>
									  <option value="chandigarh">Chandigarh</option>
									  <option value="chattisgarh">Chattisgarh</option>
									  <option value="dadra">Dadra and Nagar Haveli</option>
									  <option value="daman and Diu">Daman and Diu</option>
									  <option value="delhi">Delhi</option>
									  <option value="goa">Goa</option>
									  <option value="gujarat">Gujarat</option>
									  <option value="haryana">Haryana</option>
									  <option value="himachal">Himachal Pradesh</option>
									  <option value="kashmir">Jammu and Kashmir</option>
									  <option value="jharkhand">Jharkhand</option>
									  <option value="karnataka">Karnataka</option>
									  <option value="kerala">Kerala</option>
									  <option value="lakshadweep">Lakshadweep</option>
									  <option value="madhya Pradesh">Madhya Pradesh</option>
									  <option value="maharashtra">Maharashtra</option>
									  <option value="manipur">Manipur</option>
									  <option value="meghalaya">Meghalaya</option>
									  <option value="mizoram">Mizoram</option>
									  <option value="nagaland">Nagaland</option>
									  <option value="orissa">Orissa</option>
									  <option value="puduchery">Puduchery</option>
									  <option value="punjab">Punjab</option>
									  <option value="rajasthan">Rajasthan</option>
									  <option value="sikkim">Sikkim</option>
									  <option value="tamilnadu">Tamil Nadu</option>
									  <option value="tripura">Tripura</option>
									  <option value="uttarpradesh">Uttar Pradesh</option>
									  <option value="uttaranchal">Uttaranchal</option>
									  <option value="bengal">West Bengal</option>
                                </select>
                            </td>
							
                        </tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
						
										pincode<font color="red"> * </font>
									</span>
								</p>
							</td>
							
							<td>
								<input type="text" name="pincode" id="pincode" onkeypress="return isPhoneKeyStroke(event);">
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblpincode" >Enter the pincode</label>
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                     
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
						
										Phone number<font color="red"> * </font>
									</span>
								</p>
							</td>
						
							<td>
								<input value="" maxlength="60" name="phonenumber" id="phonenumber" onkeypress="return isPhoneKeyStroke(event);" >
							</td>
							<td>
								<lable style="display:none;color:red;" id="lblphonenumber" >Enter the phonenumber</label>
							</td>
						</tr>
                        <tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
							
										Mobile number<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input value="" maxlength="60" name="mobilenumber" id="mobilenumber" onkeypress="return isPhoneKeyStroke(event)">
							</td>
							<td>
								<lable style="display:none;color:red;" id="lblmobilenumber" >Enter the mobilenumber</label>
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                        
                        <tr>
							<td></td>
							<td style="width:200px;float:right">
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
						
										Website<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input type="text" name="website" id="website">
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblwebsite" >Enter the website</label>
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
                        
                        <tr>
							<td></td>
							<td></td>
							<td>
								<!--<input type="submit" value="Submit" name="submit"  onclick="doregistration();" >-->
								<input type="button" value="Submit" onClick="doregistration()" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="reset" value="Reset" name="reset">
							</td>
						</tr> 
                  
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


