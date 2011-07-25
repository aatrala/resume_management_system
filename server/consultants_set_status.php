<?php
	session_start();
	
	include "common_db_code.php";
	code();
	$id=$_REQUEST['id'];
	$status=$_REQUEST['status'];
	$keywords=$_REQUEST["keywords"];
	$location=$_REQUEST["location"];
	$sex=$_REQUEST["sex"];
	$experienceyears=$_REQUEST["experience_years"];
	$experiencemonths=$_REQUEST["experience_months"];
	$locationothers=$_REQUEST["location_others"];
	$notbefore=$_REQUEST["notbefore"];
	$notafter=$_REQUEST["notafter"];
	$Updatedwithin=$_REQUEST["Updatedwithin"];
	$start=$_REQUEST['start'];
	$p_f=$_REQUEST['p_f'];	
	if($status=="Active")
	{	
		$currentstatus="In Active";
	}
	else
	{
		$currentstatus="Active";
	}
	$qry="update consultants_upload set current_status='".$currentstatus."' where ID =".$id;
	
	$executed=mysql_query($qry);
	
	if($executed!=null)
	{
		header('location:consultants_search.php?keywords='.$keywords.'&location='.$location.'&sex='.$sex.'&experience_years='.$experienceyears.'&experience_months='.$experiencemonths.'&location_others='.$locationothers."&notbefore=$notbefore&notafter=$notafter&Updatedwithin=$Updatedwithin&start=".$start.'&p_f='.$p_f);
	}
	?>