<?php

// Connecting Database 
 session_start();
 include "common_db_code.php";
code();
if(isset($_REQUEST["username"]))
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
	$username=$_POST["username"];
	$password1=$_POST["password"];


	$password=convert($password1,$key);

// DeCrypt back
	//$string3=convert($string2,$key);

	
	/*echo 'Key: '.$key.'<br>'."\n";
	echo $password.'<br>'."\n";
	echo $string2.'<br>'."\n";
	echo $string3.'<br>'."\n";*/
	
	$_SESSION["Availability"]="yes";
 //this makes sure they did not leave any fields blank
   
			
 if (isset($_POST['submit']))
	{  

			$resultset=mysql_query("select ISNULL(max(ID))as ID from admin_register ",$connection);
			while($row=mysql_fetch_array($resultset))
			{
				$tempid=$row["ID"];
				$ID=$tempid;
				
			}
			$resultset=mysql_query("select ID  from admin_register where username ='".$username."'",$connection);
			
			while($row=mysql_fetch_array($resultset))
			{
				$_SESSION["Availability"]="no";	
				header('location:admin_register.php');
			}
			if($_SESSION["Availability"]=="yes")
			{
				
				if($tempid==0)
				{
						$resultset=mysql_query("select max(ID)as ID from admin_register ",$connection);

						while($row=mysql_fetch_array($resultset))
						{
							$tempid=$row["ID"];
						}
						$ID=$tempid+1;
				}
			
			
				// now we insert it into the database
				$insert = "INSERT INTO  admin_register VALUES ($ID,'".$_POST['username']."', '".$password."')";
 	           
				$add_member = mysql_query($insert);
				$_SESSION["registration"]="Success";
				header('location:admin_register.php');
			}
	}
 }
 	
?>
