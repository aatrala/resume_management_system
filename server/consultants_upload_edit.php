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
  <link rel="stylesheet" href="themes/base/jquery.ui.themes.css">
	<script src="js/jquery-1.5.1.js"></script>
	<script src="ui/minified/jquery.ui.core.min.js"></script>
	<script src="ui/minified/jquery.ui.datepicker.min.js"></script>
	
	<link rel="stylesheet" href="../demos.css">

<link rel="stylesheet" href="css/template.css" type="text/css" />
<style>
div#maincolumn1 {
float:left;
width:650px;
}
</style>
<title>Consultancy File Upload</title>
<script type="text/javascript">
$(function() {
		$.datepicker.setDefaults( $.datepicker.regional[ "" ] );
		$( "#uploadedon" ).datepicker( $.datepicker.regional[ "en" ] );
		$( "#locale" ).change(function() {
			$( "#uploadedon" ).datepicker( "option",
				$.datepicker.regional[ $( this ).val() ] 
				);
				
		});
		
	});
function validate(fileupload)
{
	alert('hai');
	
	var formok=true;
	if(fileupload.jobseeker_name.value=="")
	{
		document.getElementById("lblname").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lbltechnology").style.display='none';
	}
}
	/*if(fileupload.jobseeker_mailid.value=="")
	{
		document.getElementById("lblusername").innerHTML='Enter the mail id';
		document.getElementById("lblusername").style.display='block';
		formok=false;
	}
	else if(!isEmail(fileupload.jobseeker_mailid.value))
	{
		
		document.getElementById("lblusername").innerHTML = 'Enter a valid email id';
		document.getElementById("lblusername").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblusername").style.display='none';
	}
	if(fileupload.sex.value=="Select")
	{
		document.getElementById("lblsex").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblsex").style.display='none';
	}
	
	
	
	if(fileupload.jobseeker_mobileno.value=="")
	{
		document.getElementById("lblmobilenumber").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblmobilenumber").style.display='none';
	}
	if(fileupload.location.value=="Select")
	{
		document.getElementById("lbllocation").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lbllocation").style.display='none';
	}
	if(fileupload.technology.value=="")
	{
		document.getElementById("lbltechnology").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lbltechnology").style.display='none';
	}
	if(fileupload.experience_years.value=="Select")
	{
		document.getElementById("lblyears").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblyears").style.display='none';
	}
	if(fileupload.keywords.value=="")
	{
		document.getElementById("lblkeywords").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblkeywords").style.display='none';
	}
	
	if(fileupload.current_status.value=="Select")
	{
		document.getElementById("lblstatus").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblstatus").style.display='none';
	}
		if(fileupload.accessmode.value=="Select")
	{
		document.getElementById("lblaccessmode").style.display='block';
		formok=false;
	}
	else
	{
		document.getElementById("lblaccessmode").style.display='none';
	}
	
	return formok;
	
}

function isEmail(str)
 {
    var regex = /^[-_.a-z0-9]+@(([-_a-z0-9]+\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i;
    return regex.test(str);
}
var hash = {
  '.rtf' : 1,
  '.txt' : 1,
  '.doc' : 1,
  '.docx' : 1,  
  '.odt' : 1,
  '.pdf' : 1,
  '.rar' : 1, 
  '.zip' : 1,
};
function check_extension(filename,submitId) {
      var re = /\..+$/;
      var ext = filename.match(re);
	  //alert(ext);
      var submitEl = document.getElementById(submitId);
      if (hash[ext]) {
	
        submitEl.disabled = false;
        return true;
      } else {
       	document.getElementById("lblfile").style.display='block';
        submitEl.disabled = true;

        return false;
      }
}*/
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
											<li class="active item2" id="current"><a href="home.php"><span>Home</span></a></li>
											<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
											<li class="item4"><a href="services.php"><span>Services</span></a></li>
											<li><a href="feedback.php"><span>Feedback</span></a></li>
											<li><a href="contactus.php"><span>Contact us</span></a></li>
											<li><a href="consultants_profile.php"><span>View profile</span></a></li>
											<li><a href="consultants_upload.php"><span>Upload resume</span></a></li>
											<li><a href="consultants_company_registration.php"><span>Register a company</span></a></li>	
											<li><a href="consultants_changepwd.php"><span>Change password</span></a></li>
											<li class="item3"><a href="consultants_search.php"><span>Search</span></a></li>
											
											
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
	File Upload</div>
	
	<br/>
<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">

<?php

include "common_db_code.php";
code();
$id=$_REQUEST['id'];
$Msgsend;
error_reporting(0);
if(!isset($_POST['submit']))
					{
echo '<form name="consultants_upload" enctype="multipart/form-data" action="consultants_do_edit.php" method="post"  onSubmit="confirm("hai");">
<br/>
            
           

                  <table width="650px">
                      <tr></tr>';
				
                       
			   
					
	
					
					
					$ExperienceYearsOption=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
					$ExperienceMonthsOption=array(0,1,2,3,4,5,6,7,8,9,10,11);
					$Gender=array("Male","Female");
					$LocationOptions=array("Ahmedabad","Bangalore","Chennai",
													"Coimbatore","Gurgoan","Hyderabad","Kolkatta","Mumbai",
													"New delhi","Noida","Pune","Trivandrum","Others");
					$ResumeStatus=array("Active","In Active");
					 $qry="select * from consultants_upload where id=$id";
		             $jobseeker_name="";
					 $jobseeker_mailid="";
	                 $resultset=mysql_query($qry);
					 while($row=mysql_fetch_array($resultset))
						{
							
							$jobseeker_name=$row["jobseeker_name"];
					        
							$jobseeker_mailid=$row["jobseeker_mailid"];
			                $sex=$row["sex"];
			                $jobseeker_mobileno=$row["jobseeker_mobileno"];
			                $location=$row["location"];
			                $location_others=$row["location_others"];
			                 $technology=$row["technology"];
			               $experience_years=$row["experience_years"];
			 
			                $experience_months=$row["experience_months"];
			                $keywords=$row["keywords"];
			                $current_status=$row["current_status"];
			                $accessmode=$row["accessmode"];
							$particulars=$row["Particulars"];
							//echo "asdfadsfasdfa".$particulars;
							$uploadedon=$row["UploadedOn"];
						}
							    
							$uploadedon = explode("-", $uploadedon);
																   
							$datetime = new DateTime();
							
							$datetime->setDate($uploadedon[0], $uploadedon[1], $uploadedon[2]);
							//print $datetime->format('m/d/Y'); // Prints "2011/03/20 07:16:17" 
						echo"
						
						 
                      <tr></tr>
						<tr><td><input type='hidden' name=id value=$id></td></tr>
                        <tr><td></td><td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name</span></p></td><td><input type='text' name='jobseeker_name' value='$jobseeker_name'></td><td><lable style='display:none; color:red;' name='lblname' id='lblname' >Enter the Username</label></td></tr>
                        <tr><td></td><td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email ID</span></p></td><td><input type='text' name='jobseeker_mailid' value='$jobseeker_mailid'></td></tr>
                        <tr><td></td><td><p style='text-align: justify;'>
						<span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex</span></p></td>
                            <td>
                                   <select name='sex'>
                                                    <option>Select</option>";
													for($i=0;$i<2;$i++)
													{
														if($Gender[$i]==$sex)
														
															echo"<option selected>$Gender[$i]</option>";
														else
															echo"<option>$Gender[$i]</option>";
														
                                                    }
                                   echo"</select>

                            </td>
                            
                         </tr>
                       <tr><td></td><td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile number</span></p></td><td><input maxlength='60' name='jobseeker_mobileno' value='$jobseeker_mobileno'></td></tr>
                         <tr><td></td><td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location</span></p></td>
                         <td>
                                   <select name='location'>
                                                    <option selected>Select</option>";
									 for($i=0;$i<count($LocationOptions);$i++ )
								   {
										if($LocationOptions[$i]==$location)
											echo"<option selected>$LocationOptions[$i]</option>";
										else
											echo"<option>$LocationOptions[$i]</option>";
								   }				
													
                                                    
                            echo"                        
                                   </select>
                                         &nbsp;&nbsp;&nbsp;Others <input type='text' name='location_others' value='$location_others'>
                               </td>
                           </tr>
                         
                           <tr><td></td><td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Technology</span></p></td><td><input type='text' name='technology' value='$technology'></td></tr>
                         
                         <tr><td></td><td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience</span></p></td>
                               <td>
                                   years&nbsp;&nbsp;<select name='experience_years' >
								   <option>Select</option>";
								   for($i=0;$i<count($ExperienceYearsOption);$i++ )
								   {
										if($ExperienceYearsOption[$i]==$experience_years)
											echo"<option selected>$ExperienceYearsOption[$i]</option>";
										else
											echo"<option>$ExperienceYearsOption[$i]</option>";
								   }
                                   
                                               
                                                    
                                   echo"</select>&nbsp;&nbsp;years
                                  <select name='experience_months'>
                                                    <option selected>Select</option>";
                                    for($i=0;$i<count($ExperienceMonthsOption);$i++ )
								   {
										if($ExperienceMonthsOption[$i]==$experience_months)
											echo"<option selected>$ExperienceMonthsOption[$i]</option>";
										else
											echo"<option>$ExperienceMonthsOption[$i]</option>";
								   }                
                                   echo"</select> &nbsp;&nbsp;months
                               </td>
                         </tr>
                         <tr><td></td><td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keywords</span></p></td><td><input type='text' name='keywords' value='$keywords'/></td></tr>
                         <tr><td></td><td><p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current status of resume</span></p></td>
                            <td>
                                   <select name='current_status' >
                                                    <option >Select</option>";
									for($i=0;$i<count($ResumeStatus);$i++ )
								   {
										if($ResumeStatus[$i]==$current_status)
											echo"<option selected>$ResumeStatus[$i]</option>";
										else
											echo"<option>$ResumeStatus[$i]</option>";
								   }                 
                                   echo"</select>

                            </td>
                            
                         </tr>
						 <tr>
								<td></td>
								<td>
									<p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Access</span></p>
								</td>
								<td>
									<select name='accessmode' value='$accessmode'>
										<option selected>Private</option>
										<option>Protected</option>
										<option>Public</option>
									</select>
								</td>
						</tr>
						<tr>
								<td></td>
								<td>
									<p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Particulars</span></p>
								</td>
								<td>
									<TextArea name='particulars' id='particulars' >$particulars</TextArea>
								</td>
						</tr>
						<tr>
								<td></td>
								<td>
									<p style='text-align: justify;'><span style='font-family: verdana;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Updated On</span></p>
								</td>
								<td>
									<input type='text' name='uploadedon' id='uploadedon' value='".$datetime->format('m/d/Y')."'>
									<input type='text' name='uploadedon1' id='uploadedon1' value='' style='display:none'>
								</td>
						</tr>
                         <tr>
							<td>
							</td>
							<td>
								<p style='text-align: justify;'><span style='font-family: verdana;'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;Upload file</span>
								</p>
							</td>
							<td>
								<input type='file'  id='file' name='file'>
							</td>
						</tr>
						
                        <tr>
						</tr>
						<tr>
						</tr>
						<tr>
						</tr>
						
                        
               
					
					
                        
						<tr><td></td><td></td><td><input type='submit' value='Save' name='submit' ></td></tr> 
					</table>
                   

         ";
		
		}
		
	if(isset($_REQUEST["Msg"]))
					{
						
					
					
						echo  '<br/><strong style="color:red;"> Your resume uploaded successfully.</strong><br>';
						unset($_SESSION['Msg']);
				
					}
echo"</form>";


?>


<br>

 


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
