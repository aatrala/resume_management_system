<?php
function code()
{
//$connection=mysql_connect("mapastaffing.db.5974401.hostedresource.com", "mapastaffing", "Broov9927k0712") or die(mysql_error()); 
//mysql_select_db("mapastaffing",$connection) or die(mysql_error()); 
$connection=mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("resume_builder",$connection) or die(mysql_error());
}

?>