<?php
	
	$id=$_REQUEST['id'];
$status=$_REQUEST['status'];
$start=$_REQUEST['start'];
$p_f=$_REQUEST['p_f'];
include "common_db_code.php";
code();
			
$qry="update tblcompanyregistration set status = '".$status."'  where companyid= ".$id;

mysql_query($qry);
header('location:consultant_activation.php?start='.$start.'&p_f='.$p_f);
	
?>