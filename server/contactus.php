<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Contact Us</title>
<script type="text/javascript">

function validate(contactus)
{
	
	
	var formok=true;
	if(contactus.name.value=="")
	{
		document.getElementById("lblname").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblname").style.display='none';
	}
	
	if(contactus.mailid.value=="")
	{
		document.getElementById("lblmailid").innerHTML='Enter your mailid';
		document.getElementById("lblmailid").style.display='block';
		formok=false;
	}
	else if(!isEmail(contactus.mailid.value))
	{
		
		document.getElementById("lblmailid").innerHTML = 'Enter a valid email id';
		document.getElementById("lblmailid").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblmailid").style.display='none';
	}
	if(contactus.msgsubject.value=="")
	{
		document.getElementById("lblsubject").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblsubject").style.display='none';
	}
	
	return formok;
}
function isEmail(str)
 {
    var regex = /^[-_.a-z0-9]+@(([-_a-z0-9]+\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i;
    return regex.test(str);
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
												<li id="current" class="active item4"><a href="services.php"><span>Services</span></a></li>
												<li><a href="feedback.php"><span>Feedback</span></a></li>
									            <li id="current" class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
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
												<li class="active item4"><a href="services.php"><span>Services</span></a></li>
												<li><a href="feedback.php"><span>Feedback</span></a></li>
									            <li id="current" class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
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
	Contact us</div>
<table class="blog" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tr>
<td valign="top" colspan="2">
<br/>
<p style="text-align: justify;"><span style="font-family: verdana;">If you want to get in touch with us, send an email message or submit an request by just filling out the below form.</span></p>

<br/>
<font color="red">&nbsp;&nbsp;Required *</font><br/><br/>
<form name="contactus" enctype="multipart/form-data" action="contactus.php" method="post" onSubmit="return validate(this);">

          
          

                  <table align="center">
                        <tr></tr>
			
                        <tr><td></td><td><p style="text-align: justify;"><span style="font-family: verdana;">Enter the name<font color="red"> * </font></span></td><td><input type="text" name="name"></td><td><lable style="display:none; color:red;" name="lblname" id="lblname" >Enter the Username</label></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						
                        <tr><td></td><td><p style="text-align: justify;"><span style="font-family: verdana;">Email ID<font color="red"> * </font></span></td><td><input type="text" name="mailid"></td><td><lable style="display:none; color:red;" name="lblmailid" id="lblmailid" >Enter the mailid</label></td></tr>
					    <tr><td></td></tr>
						<tr><td></td></tr>
                        
                       <tr><td></td><td><p style="text-align: justify;"><span style="font-family: verdana;">Message subject<font color="red"> * </font></span></td><td><input type="text"name="msgsubject"></td><td><lable style="display:none; color:red;" name="lblsubject" id="lblsubject" >Enter the subject</label></td></tr>
					   <tr><td></td></tr>
						<tr><td></td></tr>
                       <tr><td></td><td><p style="text-align: justify;"><span style="font-family: verdana;">Message</span></td><td><textarea  name="msg" rows="5" cols="20"></textarea></td></tr>
					  <tr><td></td></tr>
						<tr><td></td></tr>
					   
                        <tr></tr><tr></tr><tr></tr>
                        <tr><td></td><td></td><td><input type="submit" value="Submit" name="submit"></td></tr> 
                  </table>
                 <?php

require_once('class.phpgmailer.php');
if (isset($_POST['submit']))
{
$local_body_string= " Name: ".$_POST['name']."\n Email: ".$_POST['mailid']." \n Message Subject: ".$_POST['msgsubject']." \n Message Description: ".$_POST['msg']."\n";
      
       	$mail = new PHPGMailer();
	$mail->AddAddress('karthic@aonx.com');
	
	$mail->Subject="Mail from Contact Us Page mapastaffing.in";
	$mail->Body=$local_body_string;
	
	
	$mail->Send();
		echo  '<br/><strong style="color:red;"> Your message has been successfully sent. We will contact you shortly.</strong><br/>';
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
