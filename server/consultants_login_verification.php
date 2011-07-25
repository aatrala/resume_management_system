<?php
session_start();
// Connecting Database 
  include "common_db_code.php";
	code();
	$_SESSION["incorrect"]="no";
	$_SESSION["incorrect1"]="no";
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
   $sql="SELECT username,password,status FROM consultants_register WHERE username='".$username."' and password='".$password."'";
   $result=mysql_query($sql); 

// Mysql_num_row is counting table row
   //$count=mysql_num_rows($result);
	
// If result matched $username and $password, table row must be 1 row

   //if($count==1)
   //{
	// Register $myusername, $mypassword and redirect to file "consultants_profile.php"
	
	    			while($row=mysql_fetch_array($result))
			{
				$tempid=$row["status"];
				//echo $tempid;
				if($tempid=="Active")
				{
				    //echo "active".$tempid;
					$_SESSION["username"]=$username;
				   header("location:consultants_profile.php");
		           $_SESSION["incorrect"]="no";
				}
				 if($tempid=="InActive")
                {
				//echo "In active".$tempid;
                  $_SESSION["incorrect"]="yes";
                  header("location:index.php");    
                }
				//session_register("username");
		        //header("location:consultants_profile.php");
		       // $_SESSION["incorrect"]="no";
	
            }
			$result1=mysql_query($sql); 
			// Mysql_num_row is counting table row
            $count=mysql_num_rows($result1);
			 if($count==0)
   {
   
	 $_SESSION["incorrect1"]="yes";
      header("location:index.php");    
	
   }
  
   }
?>
