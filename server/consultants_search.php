<?php
							
							session_start();

	
							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Consultancy search</title>

</head>
<link rel="stylesheet" href="themes/base/jquery.ui.themes.css">
	<script src="js/jquery-1.5.1.js"></script>
	<script src="ui/minified/jquery.ui.core.min.js"></script>
	
	<script src="ui/minified/jquery.ui.datepicker.min.js"></script>
		<!--	<link rel="stylesheet" href="../demos.css">-->
	<script type="text/javascript">
$(function() {
		$("#ui-datepicker-div").style.visible='block';
		$.datepicker.setDefaults( $.datepicker.regional[ "" ] );
		$( "#notbefore" ).datepicker( $.datepicker.regional[ "en" ] );
		$( "#locale" ).change(function() {
			$( "#notbefore" ).datepicker( "option",
				$.datepicker.regional[ $( this ).val() ] );
		});
	});
	$(function() {
		$("#ui-datepicker-div").style.visible='block';
		$.datepicker.setDefaults( $.datepicker.regional[ "" ] );
		$( "#notafter" ).datepicker( $.datepicker.regional[ "en" ] );
		$( "#locale" ).change(function() {
			$( "#notafter" ).datepicker( "option",
				$.datepicker.regional[ $( this ).val() ] );
		});
	});
	
	

	</script>
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
											<li><a href="consultants_upload.php"><span>Upload resume</span></a></li>
											<li><a href="consultants_bulk_upload.php"><span>Bulk upload</span></a></li>
											<li><a href="consultants_company_registration.php"><span>Register a company</span></a></li>	
											<li><a href="consultant_activation.php?start=0&p_f=0"><span>Consultant activation</span></a></li>
										<li class="item3" id="current"><a href="consultants_search.php"><span>Search</span></a></li>
											<li><a href="consultants_changepwd.php"><span>Change password</span></a></li>
											
											</ul></div>
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
	Search</div>
	

<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">

          
      <form name="consultants_search" action="consultants_search.php?start=0&p_f=0" method="post">
            <br/>
            
                  <table align="center">
                        <tr><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keywords</span></p></td><td><input type="text" name="keywords"></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
                        <tr><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location</span></p></td>
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
                                         &nbsp;&nbsp;&nbsp;Others <input type="text" name="location_others">
                               </td>
                           </tr>
						   <tr><td></td></tr>
											<tr><td></td></tr>
                            <tr><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex</span></p></td>
                            <td>
                                   <select name="sex">
                                                    <option selected>Select</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    
                                   </select>

                            </td>
                            
                         </tr>
						 <tr><td></td></tr>
											<tr><td></td></tr>
                         <tr><td><p style="text-align: justify;"><span style="font-family: verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience</span></p></td>
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
                                                    
                                   </select> &nbsp;&nbsp;&nbsp;&nbsp;years&nbsp;&nbsp;
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
                                                    
                                   </select> &nbsp;&nbsp;&nbsp;&nbsp;months&nbsp;&nbsp;
                               </td>
                         </tr>
						 <tr>
							<td>
							<p style="text-align: justify;"><span style="font-family: verdana;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;Not Before
							</span></p>
							</td>
							<td>
								<input value="" name="notbefore" id="notbefore" />
							</td>
						</tr>
						<tr>
							<td>
							<p style="text-align: justify;"><span style="font-family: verdana;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;
							Not After
							</span></p>
							</td>
							<td>
								<input value="" name="notafter" id="notafter" />
							</td>
						</tr>
						<tr>
							<td>
							<p style="text-align: justify;"><span style="font-family: verdana;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;
								Updated with in
							</span></p>
							</td>
							<td>
								<select name="Updatedwithin">
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
                                                    
                                   </select> 
								  &nbsp;&nbsp; months
							</td>
											<tr><td></td></tr>
											
                         <tr><td></td><td><input type="submit" value="Search" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" name="reset"></td></tr>   
                  </table>
              
              
            
<?php

$username=$_SESSION["username"];
if($username==null or $username=="")
{
	header('location:index.php');
	
}
include "common_db_code.php";
code();
 
if(isset($_REQUEST["submit"]) || isset($_REQUEST["keywords"]))
{
	$keywords=$_REQUEST["keywords"];
	$location=$_REQUEST["location"];
	$sex=$_REQUEST["sex"];
	$experienceyears=$_REQUEST["experience_years"];
	$experiencemonths=$_REQUEST["experience_months"];
	$locationothers=$_REQUEST["location_others"];
	if($sex=="Select")
	{
		$sex="";
	}
	if($experienceyears == "Select")
	{
		$experienceyears="%%";
	}
	if($experiencemonths == "Select")
	{
		$experiencemonths="%%";
		
	}
	if($location=="Select")
	{
		$location="";
	}
	$notbefore=$_REQUEST["notbefore"];
	$fromdate=$notbefore;
	$notafter=$_REQUEST["notafter"];
	$todate=$notafter;
	$within=$_REQUEST["Updatedwithin"];
	
	$datetimeb4 = new DateTime();
	$datetimeafter = new DateTime();
	if($notbefore!="")
	{
	$notbefore = explode("/", $notbefore);
																   
	
	
	$datetimeb4->setDate($notbefore[2], $notbefore[0], $notbefore[1]);
	}//print $datetimeb4->format('Y/m/d'); // Prints "2011/03/20 07:16:17" 
	
	if($notafter!="")
	{
	$notafter = explode("/", $notafter);
																   
	
	
	$datetimeafter->setDate($notafter[2], $notafter[0], $notafter[1]);
	}
	//print $datetimeafter->format('Y/m/d'); // Prints "2011/03/20 07:16:17"
	$page_name="consultants_search.php"; 
	$start=$_REQUEST['start'];								
	
	if(!($start > 0)) {                        
		$start = 0;
	}
	$eu = ($start -0);                
	$limit = 2;                                 
	$this1 = $eu + $limit; 
	$back = $eu - $limit; 
	$next = $eu + $limit; 
	$p_limit=6;
	$p_f=$_REQUEST['p_f'];		
							 
	if(!($p_f > 0)) {                        
		$p_f = 0;
	}
	$p_fwd=$p_f+$p_limit;        
	$today = date('Y-m-j');
	$today = explode("-", $today);										   
	$datetimetoday = new DateTime();	
	$newdate = strtotime ( '-'.$within.' month' , strtotime ( $datetimetoday->format('Y-m-d') ) ) ;
	$newdate = date ( 'Y-m-j' , $newdate );
	$lastmonth = $newdate; 
	$lowerdate=$datetimeb4->format('Y-m-d');
	$upperdate=$datetimeafter->format('Y-m-d');
	if($within==0)
	{
		$lastmonth ="";
	}
	$p_back=$p_f-$p_limit;
	$Searchqry="SELECT cu.ID,cu.jobseeker_name, cu.jobseeker_mailid AS mailid, cu.sex, cu.jobseeker_mobileno as mobileno, cu.keywords, cu.experience_years, cu.experience_months
				,cu.file,cu.current_status,cu.consultantusername FROM consultants_upload cu
				INNER JOIN consultants_register cr ON cu.consultantusername = cr.username
				WHERE cu.keywords LIKE '%$keywords%'
				AND (
				cu.location LIKE '%$location%'
				OR cu.location_others = '$locationothers'
				)
				AND cu.experience_years LIKE '$experienceyears'
				AND cu.experience_months LIKE '$experiencemonths'
				AND cu.sex LIKE '$sex%'
				AND cu.consultantusername = '$username'";
				if($fromdate!="")
				$Searchqry.="AND cu.UploadedOn >= '".$lowerdate."'";
				if($todate!="")
				
				$Searchqry.="AND cu.UploadedOn<= '".$upperdate."'";
				if($lastmonth!="")
				$Searchqry.="AND cu.UploadedOn>='".$lastmonth."' ";
				
			$Searchqry.=	"UNION
				SELECT cu.ID,cu.jobseeker_name, cr.emailid AS mailid, cu.sex, cr.mobile_number as mobileno, cu.keywords, cu.experience_years, cu.experience_months
				,cu.file,cu.current_status,cu.consultantusername FROM consultants_upload cu
				INNER JOIN consultants_register cr ON cu.consultantusername = cr.username
				WHERE cu.keywords LIKE '%$keywords%'
				AND (
				cu.location LIKE '%$location%'
				OR cu.location_others = '$locationothers'
				)
				AND cu.experience_years LIKE'$experienceyears'
				AND cu.experience_months LIKE '$experiencemonths'
				AND cu.sex LIKE '$sex%'
				AND cu.consultantusername != '$username'
				AND cu.accessmode = 'public' 
				AND cu.current_status='Active'";
				if($fromdate!="")
				$Searchqry.="AND cu.UploadedOn >= '".$lowerdate."'";
				if($todate!="")
				
				$Searchqry.="AND cu.UploadedOn<= '".$upperdate."'";
				if($lastmonth!="")
				$Searchqry.="AND cu.UploadedOn>='".$lastmonth."' ";
		
	$rs=mysql_query($Searchqry);
	$noofrows=mysql_num_rows($rs);

	//$Searchqry="select * from consultants_upload where keywords like '%".$keywords."%' and (location like '%".$location."%' or location_others = '".$locationothers."')
			//	and experience_years like '".$experienceyears."' and experience_months like '%".$experiencemonths."%' and sex like'".$sex."%' and consultantusername = '".$username."' limit $eu, $limit" ;
	$Searchqry=$Searchqry."  limit $eu, $limit ";		
	
	//echo $Searchqry;
	
	$rs=mysql_query($Searchqry);
	
	
	
		$bgcolor="#f1f1f1";
		echo "<br/>";
           	echo "<TABLE cellpadding=0 cellspacing=0 border=1> <tr>";
		echo "<td align='center' bgcolor='#D0D0D0' style='width:130px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Name</font></td>";

		echo "<td  align='center' bgcolor='#D0D0D0' style='width:120px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Consultancy mailid</font></td>";
		echo "<td  align='center' bgcolor='#D0D0D0' style='width:130px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Sex</font></td>";
		echo "<td  align='center' bgcolor='#D0D0D0' style='width:300px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Mobile no</font></td>";
		echo "<td  align='center' bgcolor='#D0D0D0' style='width:130px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Keywords</font></td>";
		echo "<td  align='center' bgcolor='#D0D0D0' style='width:250px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Experience</font></td>";
		echo "<td  align='center' bgcolor='#D0D0D0' style='width:130px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Action</font></td>";
		echo "<td  align='center' bgcolor='#D0D0D0' style='width:260px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Status</font></td>";
		echo "<td  align='center' bgcolor='#D0D0D0' style='width:150px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Edit</font></td></tr>";
		


		if($noofrows==0)
	{
		echo" <tr><td colspan='9'><center><strong style='color:red;'><br/>No records found for your search criteria</strong></center></td></tr>";
	}
	else
			{
		while($row=mysql_fetch_array($rs))
			{
				if($bgcolor=='#f1f1f1'){$bgcolor='#ffffff';}
				else{$bgcolor='#f1f1f1';}

				$tempid=$row["ID"];
				$jobseeker_name=$row["jobseeker_name"];
				$jobseeker_mailid=$row["mailid"];
				$keywords1=$row["keywords"];
				$length=strlen($jobseeker_name); 
				$name_length=strlen($jobseeker_mailid); 
				$keywords_length=strlen($keywords1);
					echo $keywords;
				if ($length <= 17){
					$jobseeker_name = $jobseeker_name; 
				
				}
				else {
					
					$jobseeker_name=preg_replace('/\s+?(\S+)?$/', '', substr($jobseeker_name, 0, 17))."...";
				
				}
				if ($name_length <= 16){
					
					$jobseeker_mailid=$jobseeker_mailid;
					
					
				}
				else {
					
					
					$jobseeker_mailid=preg_replace('/\s+?(\S+)?$/', '', substr($jobseeker_mailid, 0, 16))."...";
					

				}
				if ($keywords_length<= 10){
					
					
					$keywords1=$keywords1;
					
				}
				else {
					
					
					
					$keywords1=preg_replace('/\s+?(\S+)?$/', '', substr($keywords1, 0, 10))."...";
					
				}
	
				echo "<tr >";
echo "<td align='center' bgcolor=$bgcolor id='title' title='$row[jobseeker_name]'>&nbsp;<font face='Verdana' size='2'>$jobseeker_name</font></td>"; 

echo "<td align='center' bgcolor=$bgcolor id='title' title='$row[mailid]'>&nbsp;<font face='Verdana' size='2'>$jobseeker_mailid</font></td>"; 
echo "<td align='center' bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2'>$row[sex]</font></td>"; 
echo "<td align='center' bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2'>$row[mobileno]</font></td>"; 
echo "<td align='center' bgcolor=$bgcolor id='title' title='$row[keywords]'>&nbsp;<font face='Verdana' size='2'>$keywords1</font></td>"; 
echo "<td align='center' bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2'>$row[experience_years]yrs $row[experience_months]mth</font></td>"; 
$link="uploaded_resumes/".$row['file'];
$viewlink="readdocfile.php?filename=".$link;
//<a href='".$viewlink."'>view</a> 
echo "<td align='center' bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2'><a href='".$link."'>Download</a></font></td>"; 

				$status=$row['current_status'];
				if($status=="Active")
				{
					$editlink="SetInactive";
				}
				else
				{
					$editlink="SetActive";
				}
				if($row['consultantusername'] == $username)
				{
					echo "<td align='center' bgcolor=$bgcolor id='title' width='100px'>&nbsp;<font face='Verdana' size='2'>
					<a href='consultants_set_status.php?id=".$tempid."&status=".$status."&keywords=$keywords&location=$location&
					sex=$sex&experience_years=$experienceyears&experience_months=$experiencemonths&location_others=$locationothers&
					notbefore=$fromdate&notafter=$todate&Updatedwithin=$within&start=$p_back&p_f=$p_back'>".$editlink."</a></font></td>"; 
					echo "<td align='center' bgcolor=$bgcolor id='title' width='100px'>&nbsp;<font face='Verdana' size='2'>
					<a href='consultants_upload_edit.php?id=$tempid'>Edit</a></font></td>"; 
				}
				else
				{
					echo "<td align='center' bgcolor=$bgcolor id='title' width='100px'>&nbsp;<font face='Verdana' size='2'>
					$status</font></td>"; 
					echo "<td align='center' bgcolor=$bgcolor id='title' width='100px'>&nbsp;<font face='Verdana' size='2'>
					Edit</font></td>"; 
				}
					
					echo "</tr>";				
			}
		}
		echo "</table>";
	


        
if($noofrows>$limit)
				{
	echo "<table align = 'center' width='50%'><tr><td  align='left' width='20%'>";
	
	if($p_f<>0){
		
		print "<a href='$page_name?keywords=$keywords&location=$location&sex=$sex&experience_years=$experienceyears&experience_months=$experiencemonths&location_others=$locationothers&notbefore=$fromdate&notafter=$todate&Updatedwithin=$within&start=$p_back&p_f=$p_back'><font face='Verdana' size='2'>PREV".( ($p_limit/$limit)+1)."</font></a>"; 
	}
	echo "</td><td  align='left' width='10%'>";
	


	if($back >=0 and ($back >=$p_f)) { 
               
		print "<a href='$page_name?keywords=$keywords&location=$location&sex=$sex&experience_years=$experienceyears&experience_months=$experiencemonths&location_others=$locationothers&notbefore=$fromdate&notafter=$todate&Updatedwithin=$within&start=$back&p_f=$p_f'><font face='Verdana' size='2'>PREV</font></a>"; 
	} 

	echo "</td><td align=center width='30%'>";
	for($i=$p_f;$i < $noofrows and $i<($p_f+$p_limit);$i=$i+$limit){
		if($i <> $eu){
			$i2=$i+$p_f;
			 
			echo " <a href='$page_name?keywords=$keywords&location=$location&sex=$sex&experience_years=$experienceyears&experience_months=$experiencemonths&location_others=$locationothers&notbefore=$fromdate&notafter=$todate&Updatedwithin=$within&start=$i&p_f=$p_f'><font face='Verdana' size='2'>".(($i/$limit)+1)."</font></a> ";
		}
		else { echo "<font face='Verdana' size='4' color=red>".(($i/$limit)+1)."</font>";}        
	}


	echo "</td><td  align='right' width='10%'>";

	if($this1 < $noofrows and $this1 < ($p_f+$p_limit)) { 
		
		print "<a href='$page_name?keywords=$keywords&location=$location&sex=$sex&experience_years=$experienceyears&experience_months=$experiencemonths&location_others=$locationothers&notbefore=$fromdate&notafter=$todate&Updatedwithin=$within&start=$next&p_f=$p_f'><font face='Verdana' size='2'>NEXT</font></a>";
	} 
	echo "</td><td  align='right' width='20%'>";

	if($p_fwd < $noofrows){
  	
		print "<a href='$page_name?keywords=$keywords&location=$location&sex=$sex&experience_years=$experienceyears&experience_months=$experiencemonths&location_others=$locationothers&notbefore=$fromdate&notafter=$todate&Updatedwithin=$within&start=$p_fwd&p_f=$p_fwd'><font face='Verdana' size='2'>NEXT ".(($p_limit/$limit)+1)."</font></a>"; 
	}
	echo "</td></tr></table>";

}		
}

     echo"</form>";
 

?>
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










