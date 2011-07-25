<?php
session_start();
include "common_db_code.php";
code();
if(isset($_REQUEST['username']))
{
$username=$_REQUEST['username'];
$resultset=mysql_query("select companyid  from tblcompanyregistration where companyusername ='".$username."'");
$IsAvailable=true;
while($row=mysql_fetch_array($resultset))
{
	$IsAvailable=false;
}
if($IsAvailable)
	echo "username is available";
else
	echo "username is not available";

}

?>
