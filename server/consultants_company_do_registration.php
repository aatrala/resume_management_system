<?php
session_start();
include "common_db_code.php";
code();
	if(isset($_REQUEST["submit"]))
		{	
		function convert($str,$ky=''){
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
			$username=$_SESSION["username"];
			$cusername=$_REQUEST["cusername"];
			$cpassword1=$_REQUEST["cpassword"];
			$ccompanyname=$_REQUEST["ccompanyname"];
			$caddress=$_REQUEST["caddress"];
			$cphonenumber=$_REQUEST["cphonenumber"];
			$cwebsite=$_REQUEST["cwebsite"];
			$cpassword=convert($cpassword1,$key);
			$_SESSION["cAvailability"]="yes";
			$resultset=mysql_query("select ISNULL(max(companyid))as ID from tblcompanyregistration ");
			
			while($row=mysql_fetch_array($resultset))
			{
				$tempid=$row["ID"];
				$ID=$tempid;
				
			}
			
			$resultset=mysql_query("select companyid from tblcompanyregistration where companyusername ='".$cusername."'");
			
			while($row=mysql_fetch_array($resultset))
			{
				$_SESSION["cAvailability"]="no";	
				echo $row["companyid"];
			
			}
			if($_SESSION["cAvailability"]=="no")
			{
					header('location:consultants_company_registration.php');
			}
			if($_SESSION["cAvailability"]=="yes")
			{
				
				if($tempid==0)
				{
						$resultset=mysql_query("select max(companyid)as ID from tblcompanyregistration ");

						while($row=mysql_fetch_array($resultset))
						{
							$tempid=$row["ID"];
						}
						$ID=$tempid+1;
				}
			
			
				// now we insert it into the database
				$insert = "INSERT INTO  tblcompanyregistration VALUES ($ID,'".$cusername."', '".$cpassword."', '".$ccompanyname."', '".$caddress."', '".$cphonenumber."', '".$cwebsite."','".$username."','InActive')";
				//echo $insert;
				$add_member = mysql_query($insert);
				//echo "sss".$add_member;
				if(isset($add_member))
			{
				$_SESSION["cregistration"]="Success";
			}	
				header('location:consultants_company_registration.php');
				
			}
		}
?>
	
