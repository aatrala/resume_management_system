<?php
							
	session_start();
							
							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  <link rel="stylesheet" href="themes/base/jquery.ui.all.css">
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
				$.datepicker.regional[ $( this ).val() ] );
		});
	});
function isDate(dateStr) {

var datePat = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
var matchArray = dateStr.match(datePat); // is the format ok?

if (matchArray == null) {
//alert("Please enter date as either mm/dd/yyyy or mm-dd-yyyy.");
return false;
}

month = matchArray[1]; // p@rse date into variables
day = matchArray[3];
year = matchArray[5];

if (month < 1 || month > 12) { // check month range
//alert("Month must be between 1 and 12.");
return false;
}

if (day < 1 || day > 31) {
//alert("Day must be between 1 and 31.");
return false;
}

if ((month==4 || month==6 || month==9 || month==11) && day==31) {
//alert("Month "+month+" doesn`t have 31 days!")
return false;
}

if (month == 2) { // check for february 29th
var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
if (day > 29 || (day==29 && !isleap)) {
//alert("February " + year + " doesn`t have " + day + " days!");
return false;
}
}
return true; // date is valid
}
function validate(fileupload)
{
	
	
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
	if(fileupload.jobseeker_mailid.value=="")
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
	if(fileupload.uploadedon.value=="")
	{
		document.getElementById("lbluploadedon").style.display='block';
		formok=false;
	}
	/*else
	{
		document.getElementById("lbluploadedon").style.display='none';
	}*/
	else if(!isDate(fileupload.uploadedon.value))
	{
	document.getElementById("lbluploadedon").style.display='block';
	document.getElementById("lbluploadedon").innerHTML='Enter a valid date';
	formok=false;
	}else
	{
		document.getElementById("lbluploadedon").style.display='none';
	}
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
				  <td>
				  </tr>
				   </tbody></table>
	               
	</div>

	<div id="menu">
			<div id="pillmenu">
				<ul class="menu">
					<li class="active item2"><a href="home.php"><span>Home</span></a></li>
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
											<li><a href="consultants_profile.php"><span>View profile</span></a></li>
											<li id="current"><a href="consultants_upload.php"><span>Upload resume</span></a></li>
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
	File Upload</div>
	
	<br/>
<font color="red">&nbsp;&nbsp;Required *</font>
<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">


<form name="consultants_upload" enctype="multipart/form-data" action="consultants_upload.php" method="post" onSubmit="return validate(this);">
				<?php

				// Connecting Database 

				 include "common_db_code.php";
				code();
				require_once('class.phpgmailer.php');
				$username=$_SESSION["username"];
				//passing values
					if (isset($_POST['submit'])) 
					{
							 $jobseeker_name=$_POST["jobseeker_name"];
							 $jobseeker_mailid=$_POST["jobseeker_mailid"];
							 $sex=$_POST["sex"];
							 $jobseeker_mobileno=$_POST["jobseeker_mobileno"];
							 $location=$_POST["location"];
							 $location_others=$_POST["location_others"];
							 $technology=$_POST["technology"];
							 $experience_years=$_POST["experience_years"];
							 $experience_months=$_POST["experience_months"];
							 $keywords=$_POST["keywords"];
							 $current_status=$_POST["current_status"];
							 $Particulars=$_POST["particulars"];
							 $uploadedon=$_POST["uploadedon"];
							 				
							$uploadedon = explode("/", $uploadedon);
																   
							$datetime = new DateTime();
							
							$datetime->setDate($uploadedon[2], $uploadedon[0], $uploadedon[1]);
							//print $datetime->format('Y/m/d'); // Prints "2011/03/20 07:16:17" 
							if(isset($location_others))
							{
								$location_others="none";
							}
						
							 //this makes sure they did not leave any fields blank
								$resultset=mysql_query("select ISNULL(max(ID))as ID from consultants_upload ");
								while($row=mysql_fetch_array($resultset))
								{
									$tempid=$row["ID"];
									$ID=$tempid;
								
								}
							
							//echo "id is ".$ID;
								
								if($tempid==0)
								{
										$resultset=mysql_query("select max(ID)as ID from consultants_upload ");

										while($row=mysql_fetch_array($resultset))
										{
											$tempid=$row["ID"];
										}
										$ID=$tempid+1;
								}
							  
									
							$tmpname=$_FILES["file"]["tmp_name"];
							$name=$_FILES["file"]["name"];
							$type=$_FILES["file"]["type"];
							$size=$_FILES["file"]["size"];
							$target_path = "uploaded_resumes/";
							$filename = addslashes(date("d_m_Y_H_i_s").'_'.$name);
							
							copy($tmpname,$target_path.$filename);
							
							
							$insert = "INSERT INTO consultants_upload (ID,jobseeker_name,jobseeker_mailid,sex,jobseeker_mobileno,location,location_others,
							technology,experience_years,experience_months,keywords,current_status,accessmode,Particulars,file,UploadedOn,consultantusername)VALUES ($ID,'".$_POST['jobseeker_name']."', 
							'".$_POST['jobseeker_mailid']."', '".$_POST['sex']."', '".$_POST['jobseeker_mobileno']."', '".$_POST['location']."', '".$location_others."', '".$_POST['technology']."', "
							.$_POST['experience_years'].", ".$_POST['experience_months'].", '".$_POST['keywords']."', '".$_POST['current_status']."','".$_POST['accessmode']."','".$Particulars."','".$filename."','".$datetime->format('Y/m/d')."','".$username."')";			  
							
							//echo $insert;
							$add_member = mysql_query($insert); 
							
							if($add_member == 1)
							{
								echo  '<br/><strong style="color:red;"> Your resume uploaded successfully.</strong><br>';	
							}	

							
							   
							   
						
							
				 
					}
				  
					
				?>
				   
            
           <br/>

                  <table width="650px">
                      <tr></tr>
			
                        <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;Enter the name
										<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td >
								<input type="text" name="jobseeker_name">
							</td>
							<td style="width:150px;">
								<lable style="display:none; color:red;" name="lblname" id="lblname" >
									Enter the Username
								</label>
							</td>
						</tr>

                        <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;Email ID
									<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input type="text" name="jobseeker_mailid">
							</td>
								<td>
									<lable style="display:none; color:red;" name="lblusername" id="lblusername" >
										Enter the mail id
									</label>
								</td>
						</tr>

                        <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;Sex
										<font color="red"> * </font>
									</span>
								</p>
							</td>
                            <td>
                                   <select name="sex">
                                                    <option selected>Select</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    
                                   </select>

                            </td>
							<td>
								<lable style="display:none; color:red;" id="lblsex" >Select the gender</label>
							</td>
                            
						</tr>

                        <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;Mobile number
										<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input value="" maxlength="60" name="jobseeker_mobileno" onkeypress="return isPhoneKeyStroke(event);">
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblmobilenumber" >Enter the contact number</label>
							</td>
						</tr>
                         <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Location
										<font color="red"> * </font>
									</span>
								</p>
							</td>
                         <td>
                                   <select name="location">
                                                    <option selected>Select</option>
                                                    <option>Ahmedabad</option>
                                                    <option>Bangalore</option>
                                                    <option>Chennai</option>
                                                    <option>Coimbatore</option>
                                                    <option>Gurgoan</option>
                                                    <option>Hyderabad</option>
                                                    <option>Kolkatta</option>
                                                    <option>Mumbai</option>
                                                    <option>New delhi</option>
						    <option>Noida</option>
						    <option>Pune</option>
                                                    <option>Trivandrum</option>
                                                    <option>Others</option>
                                                    
                                   </select>
                                         &nbsp;&nbsp;&nbsp;Others <input type="text" name="location_others" size="8px">
                               </td>
<td><lable style="display:none; color:red;" id="lbllocation" >Select the location</label></td>
                           </tr>
                         
                           <tr>
								<td><p style="text-align: justify;">
										<span style="font-family: verdana;">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;Technology
											<font color="red"> * </font>
										</span>
									</p>
								</td>
								<td>
									<input type="text" name="technology">
								</td>
								<td>
									<lable style="display:none; color:red;" id="lbltechnology" >
										Enter the technology
									</label>
								</td>
							</tr>
                         
                         <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;Experience
										<font color="red"> * </font>
									</span>
								</p>
							</td>
                            <td>
                                  <select name="experience_years">
                                                    <option selected>Select</option>
                                                    <option>0</option>
													<option>1</option>
                                                    <option>2</option>
													<option>3</option>
                                                    <option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
                                                    <option>12</option>                                          
													<option>13</option>
                                                    <option>14</option>
													<option>15</option>
													<option>16</option>
													<option>17</option>
													<option>18</option>
													<option>19</option>
													<option>20</option>
                                                    
                                   </select>&nbsp;&nbsp;years&nbsp;&nbsp;
                                  <select name="experience_months">
                                                    <option selected>Select</option>
                                                    <option>0</option>
													<option>1</option>
                                                    <option>2</option>
													<option>3</option>
                                                    <option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
                                                    
                                   </select>&nbsp;&nbsp;months
                            </td>
							<td>
								<lable style="display:none; color:red;" id="lblyears" >
								Select the experience</label>
							</td>
                         </tr>
                         <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Keywords
										<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input type="text" name="keywords"/>
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblkeywords" >Enter the keywords</label>
							</td>
						</tr>
                        <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Status of resume<font color="red"> * </font>
									</span>
								</p>
							</td>
                            <td>
                                   <select name="current_status">
                                                    <option selected>Select</option>
                                                    <option>Active</option>
                                                    <option>In Active</option>
                                                    
                                   </select>

                            </td>
<td><lable style="display:none; color:red;" id="lblstatus" >Select the status</label></td>
                            
                         </tr>
						 <tr>
				
								<td>
									<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;Access
										<font color="red"> * </font>
										</span>
									</p>
								</td>
								<td>
									<select name="accessmode">
										<option selected>Select</option>
										<option>Private</option>
										<option>Protected</option>
										<option>Public</option>
									</select>
								</td>
<td><lable style="display:none; color:red;" id="lblaccessmode" >Enter the access mode</label></td>
						</tr>
						<tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Particulars
										<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<TextArea id="particulars" name="particulars"></TextArea>
							</td>
							<td>
							</td>
						</tr>
                         <tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload resume
										<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input type="file"  id="file" name="file" onchange="check_extension(this.value,'submit');">
								<br/><br/>Upload (doc, docx, odt, pdf, rtf, txt, rar, zip)
							</td>
							<td>
								<lable style="display:none; color:red;" id="lblfile" >Invalid file type</label>
							</td>
						</tr>
						<tr>
							<td>
								<p style="text-align: justify;">
									<span style="font-family: verdana;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Updated On
										<font color="red"> * </font>
									</span>
								</p>
							</td>
							<td>
								<input value="" name="uploadedon" id="uploadedon" />
							</td>
							<td>
								<lable style="display:none; color:red;" id="lbluploadedon" >
										Enter the date
									</label>
							</td>
						</tr>
                        <tr></tr><tr></tr><tr></tr>
                        <tr><td></td>
							<td>
								<input type="submit" value="Submit" name="submit">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="reset" value="Cancel" name="reset">
							</td>
						</tr> 
                  </table>
                
                  
       
                   

         </form>
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
