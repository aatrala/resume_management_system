<?php
session_start();
 include "common_db_code.php";
	code();

	//if(isset($_REQUEST["submit"]))
		{	
		function convert($str,$ky='')
		{
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

	$key='broovinformationservices'; // 8-32 characters without spaces
			$username=$_REQUEST["username"];
			$pwd1=$_REQUEST["password"];
			$contact_person=$_REQUEST["contactperson"];
			 $designation=$_REQUEST["designation"];
			 $company_name=$_REQUEST["companyname"];
			 $company_address=$_REQUEST["companyaddress"];
			 $State=$_REQUEST["State"];
			 $pincode=$_REQUEST["pincode"];
			 $phone_number=$_REQUEST["phonenumber"];
			 $mobile_number=$_REQUEST["mobilenumber"];
 
			 $website=$_REQUEST["website"];
			$password1=$_REQUEST["password"];
			$password=convert($password1,$key);
			$_SESSION["Availability"]="yes";
			$resultset=mysql_query("select ISNULL(max(ID))as ID from consultants_register ");
			
			while($row=mysql_fetch_array($resultset))
			{
				$tempid=$row["ID"];
				$ID=$tempid;
				
			}
			
			$resultset=mysql_query("select ID  from consultants_register where username ='".$username."'");
			
			while($row=mysql_fetch_array($resultset))
			{
				$_SESSION["Availability"]="no";	
				//header('location:consultants_register.php');
			}
			
			if($_SESSION["Availability"]=="yes")
			{
				
				if($tempid==0)
				{
						$resultset=mysql_query("select max(ID)as ID from consultants_register ");

						while($row=mysql_fetch_array($resultset))
						{
							$tempid=$row["ID"];
						}
						$ID=$tempid+1;
				}
			
			
				// now we insert it into the database
				$insert = "INSERT INTO consultants_register VALUES ($ID,'".$username."', '".$password."', '".$contact_person."', '".$designation."', '".$company_name."', '".$company_address."', '".$State."', ".$pincode.", '".$phone_number."',' ".$mobile_number."','".$username."','".$website."','InActive')";
				$add_member = mysql_query($insert) or die('Error, insert query failed'); ;
				//$_SESSION["registration"]="Success";
				echo "success";
				header('location:index.php');
			}
		}
?>
	
