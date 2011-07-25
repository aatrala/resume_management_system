<?php
include "common_db_code.php";
	code();

$id=$_REQUEST['id'];
			
			 $jobseeker_name=$_POST["jobseeker_name"];
			 $jobseeker_mailid=$_POST["jobseeker_mailid"];
			 $sex=
			 $_POST["sex"];
			 $jobseeker_mobileno=$_POST["jobseeker_mobileno"];
			 $location=$_POST["location"];
			 $location_others=$_POST["location_others"];
			 $technology=$_POST["technology"];
			 $experience_years=$_POST["experience_years"];
			 $experience_months=$_POST["experience_months"];
			 $keywords=$_POST["keywords"];
			 $accessmode=$_POST["accessmode"];
			 $current_status=$_POST["current_status"];
			 $particulars=$_POST["particulars"];
			 $uploadedon=$_POST["uploadedon"];
			 if($location_others=='')
			{
				$location_others="none";
			}
			$uploadedon = explode("/", $uploadedon);						   
			$datetime = new DateTime();			
			$datetime->setDate($uploadedon[2], $uploadedon[0], $uploadedon[1]);

			//print $datetime->format('Y/m/d'); // Prints "2011/03/20 07:16:17" 
			 $qry="update consultants_upload set jobseeker_name='$jobseeker_name',jobseeker_mailid='$jobseeker_mailid'
			 ,sex='$sex',jobseeker_mobileno='$jobseeker_mobileno',location='$location',
			 location_others='$location_others',technology='$technology',experience_years=$experience_years,
			 experience_months=$experience_months,keywords='$keywords',accessmode='$accessmode',
			 current_status='$current_status',Particulars='$particulars',UploadedOn=' ".$datetime->format('Y/m/d')."'";
			 if(isset($_REQUEST['file']))
				{
					$tmpname=$_FILES["file"]["tmp_name"];
					$name=$_FILES["file"]["name"];
					$type=$_FILES["file"]["type"];
					$size=$_FILES["file"]["size"];
					$target_path = "uploaded_resumes/";
					$filename = addslashes(date("d_m_Y_H_i_s").'_'.$name);
					
					copy($tmpname,$target_path.$filename);
					
					$qry=$qry.",file='$filename'";
					
				}
			$qry=$qry." where id =".$id;	
			
			$result=mysql_query($qry);
			
				$Msgsend="True";
			
			$page = 'consultants_upload_edit.php?id='.$id.'&Msg='.$Msgsend.'&date'.$datetime->format('Y/m/d');
 
			$sec = "1";
 
			$_SESSION["Msg"]="true";
			header('location:consultants_upload_edit.php?id='.$id.'&Msg='.$Msgsend);
				
			
         
 	
	
?>