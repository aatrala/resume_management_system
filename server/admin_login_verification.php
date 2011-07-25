<?php
session_start();
// Connecting Database 
  include "common_db_code.php";
	code();
	$_SESSION["incorrect"]="no";
	// passing the values from form
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

	$key='broovinformationservices'; // 8-32 characters without spaces*/
	 $username=$_POST['username'];
	
	$password1=$_POST['password'];
	
	$password=convert($password1,$key);
   //$password=md5($_POST['password']);
  
    $sql="SELECT username,password FROM admin_register WHERE username='".$username."' and password='".$password."'";
    $result=mysql_query($sql); 
   

// Mysql_num_row is counting table row
       
       $count=mysql_num_rows($result);	
	  
// If result matched $username and $password, table row must be 1 row

   if($count==1)
   {
	// Register $myusername, $mypassword and redirect to file "admin_activation.php"
		$_SESSION["ausername"]=$username;
		header("location:admin_activation.php?start=0&p_f=0");
		$_SESSION["incorrect"]="no";
	
   }
  else 
   {
        $_SESSION["incorrect"]="yes";
		header("location:admin.php");    
   }
   }
?>
