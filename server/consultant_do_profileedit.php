<?php
session_start();
	include "common_db_code.php";
	code();
			
			$username=$_SESSION['username'];
			$newcontactperson=$_POST["contactperson"];
			 $newdesignation=$_POST["designation"];
			 $newcompanyname=$_POST["companyname"];
			 $newcompanyaddress=$_POST["companyaddress"];
			 $newstate=$_POST["State"];
			 $newpincode=$_POST["pincode"];
			 $newphone=$_POST["phone"];
			 $newmobile=$_POST["mobile"];
			 $newemailid=$_POST["emailid"];
			 $newwebsite=$_POST["website"];
			$qry="update consultants_register set contact_person='$newcontactperson',designation='$newdesignation',
				  company_name='$newcompanyname',company_address='$newcompanyaddress',state='$newstate',pincode=$newpincode,
				  phone_number='$newphone',mobile_number='$newmobile',emailid='$newemailid',website='$newwebsite' where username='$username'";
			
			$result=mysql_query($qry);
			if($result)
			{
				$msg="true";
			}
			header('location:consultants_profile.php'.'?Msg='.$msg);
		
?>	