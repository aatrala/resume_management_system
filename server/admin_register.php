<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Admin Registration</title>
<script type="text/javascript">

function validate(registration)
{

	var formok=true;
	
	if(registration.username.value=="")
	{
		document.getElementById("lblusername").innerHTML='Enter the username';
		document.getElementById("lblusername").style.display='block';
		formok=false;
	}
	else if(!isEmail(registration.username.value))
	{
		
		document.getElementById("lblusername").innerHTML = 'Enter a valid email id';
		document.getElementById("lblusername").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblusername").style.display='none';
	}
	if(registration.password.value=="")
	{
		document.getElementById("lblpassword").style.display='block';
		formok=false;
	
	}
	else
	{
		document.getElementById("lblpassword").style.display='none';
		
	}
	if(registration.confirmpassword.value=="")
	{
		document.getElementById("lblconfirmpassword").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblconfirmpassword").style.display='none';
	}
	
	if(registration.password.value!=registration.confirmpassword.value)
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
	Admin registration</div>
<font color="red">&nbsp;&nbsp;Required *</font>	
	<br/>

<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">


         <form name="consultants_register" action="admin_registration.php" method="post" onSubmit="return validate(this);">
           
           
			   
                  <table align="center">
                        <tr></tr>
			
                        <tr><td></td><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email ID<font color="red"> * </font></span></p></td><td><input type="text" name="username"></td>
							
							<td>
							<?php
								
								if(isset($_SESSION["Availability"]))
									{	
										if($_SESSION["Availability"]=="no")
											{
												echo"<strong style='color:red;'>username not available</strong>";
												unset($_SESSION["Availability"]);
											}
										
									}
							?><lable style="display:none; color:red;" name="lblusername" id="lblusername" >Enter the Username</label>
							</td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
                        <tr><td></td><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password<font color="red"> * </font></span></p></td><td><input type="password" name="password"></td><td>
								<lable style="display:none; color:red;" id="lblpassword" >Enter the password</label>
							</td></tr>
						<tr><td></td></tr>
							<tr><td></td><td></td><td></td><td><lable style="display:none; color:red;" id="lblpasswordmatch" >passwords does not match</label></td></tr>
                        <tr><td></td><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm password<font color="red"> * </font></span></p></td><td><input type="password" name="confirmpassword"></td><td>
								<lable style="display:none; color:red;" id="lblconfirmpassword" >Enter the confirm password</label>
								
							</td></tr>
						<tr><td></td></tr>
							<tr><td></td></tr>
                        
                        
                        
                        
                                     
                        <tr><td></td><td></td><td><input type="submit" value="Submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" name="reset"></td></tr> 
                  
				  </table>
				  <?php
						if(isset($_SESSION["registration"]))
							{
								if($_SESSION["registration"]=="Success")
								{
									echo  '<br/><strong style="color:red;"> Thank You. You have successfully registered.</strong><br>';
									echo '<br/><a href="admin.php" >Click here to login</a>';
									unset($_SESSION["registration"]);
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


