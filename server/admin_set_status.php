<?php

$id=$_REQUEST['id'];
$status=$_REQUEST['status'];
$start=$_REQUEST['start'];
$p_f=$_REQUEST['p_f'];
include "common_db_code.php";
code();
			
$qry="update consultants_register set status = '".$status."'  where id = ".$id;

mysql_query($qry);
header('location:admin_activation.php?start='.$start.'&p_f='.$p_f);
?>