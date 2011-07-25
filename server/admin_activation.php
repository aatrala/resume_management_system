<?php
session_start();
$username=$_SESSION["ausername"];
	if($username==null or $username=="")
	{
		header('location:index.php');
		
	}		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  
<link rel="stylesheet" href="css/template.css" type="text/css" />

<title>Admin activation</title>

</head>
   <body id="page_bg">
	<div id="container">
	<div id="title">
	
<table>
                         <tbody><tr>
                           <td>
                             <img src="images/logo3.gif">
                           </td>
                           <td style="padding-top: 8px; width:300px;"><font size="6" face="" color="#000000;">Mapa Staffing</font>
	                   <br><br>
					    
 	                   <p align="left"><font size="2" face="verdana" color="#880000">            match performing assets</font></p>
					   <p> 
		          </p>
				  
				  
				  </td>
				  <td style="width:710px;">
				   <br><br>
				   <?php	                     
						 if(isset($_SESSION['ausername']))
                                                {
													$user=$_SESSION['ausername'];
												  echo " <p style='float:right'>$user |&nbsp;<font face='verdana' style='size:11px;'><a href='logout.php'>Logout</a></font></p>";
                                                 }												
	                        ?>	
				  <td>
				  </tr>
				   </tbody></table>                       
		          
                      
	</div>
	
	<div id="menu">
			<div id="pillmenu">
				<ul class="menu">
					<li class="active item2" id="current"><a href="home.php"><span>Home</span></a></li>
					<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
					<li class="item4"><a href="services.php"><span>Services</span></a></li>
					<li><a href="feedback.php"><span>Feedback</span></a></li>
					<li class="item10"><a href="contactus.php"><span>Contact us</span></a></li>
					<li class="item10"><a href="mapastaffing_help.php"><span>Help</span></a></li>
					
				</ul>
			</div>
			<div id="search">
					
			</div>
	</div>
	<div id="wrapper">	
						<div id="leftcolumn">
				<div class="column_top">
					<div class="column_bottom">
								<div class="module_menu">
			<div>
				<div>
					<div>
													<h3>Main Menu</h3>
											<ul class="menu">
											<li class="active item2" id="current"><a href="home.php"><span>Home</span></a></li>
											<li class="item3"><a href="aboutus.php"><span>About us</span></a></li>
											<li class="item4"><a href="services.php"><span>Services</span></a></li>
											<li><a href="feedback.php"><span>Feedback</span></a></li>
											<li><a href="contactus.php"><span>Contact us</span></a></li>
											<li><a href="admin_activation.php?start=0&p_f=0"><span>Consultants activation</span></a></li>
											<li><a href="admin_changepwd.php"><span>Change password</span></a></li>
											
											</ul>
										</div>
				</div>
			</div>
		</div>
			
	
				</div>
				</div>
			</div>
			<div id="holder">
				<div id="holder1">
					<div id="newsflash">
						
					</div>
					<div id="popular">
						
					</div>

								
					<div id="maincolumn1">
						
						<div class="nopad">				
							
															<div class="componentheading">
	Admin activation</div>
	
	<br/>
<table cellspacing="0" cellpadding="0" class="blog">
<tbody><tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">



<tbody><tr>
<td valign="top" colspan="2">


   <form name="admin_activation" action="admin_activation.php?start=0&p_f=0" method="post">      
		
<?php
	if(isset($_SESSION['ausername']))
	   {
			include "common_db_code.php";
			code();
		
			$page_name="admin_activation.php"; 
				/*if($status=="Active")
				{	
					$currentstatus="0";
					echo $currentstatus;
					$qry="update consultants_register set status='$status' where username='$consultantmailid'";
					echo $qry;
					mysql_query($qry);
				}
				else
				{
					$currentstatus="1";
					echo $currentstatus;
					$qry="update consultants_register set status='$status' where username='$consultantmailid'";
					echo $qry;
					mysql_query($qry);
				}
				*/
				if(isset($_REQUEST['start']) and isset($_REQUEST['p_f']))
				
				{
				$start=$_REQUEST['start'];								
				$p_f=$_REQUEST['p_f'];
				}
				else
				{
				$start=0;
				$p_f=0;
				}
				if(!($start > 0)) {                        
					$start = 0;
				}
				
				$p_limit=6;

						
										 
				if(!($p_f > 0)) {                        
					$p_f = 0;
				}
				$p_fwd=$p_f+$p_limit;
		

				$p_back=$p_f-$p_limit;
				$eu = ($start -0);                
				$limit = 2;                                 
				$this1 = $eu + $limit; 
				$back = $eu - $limit; 
				$next = $eu + $limit; 
				$Searchqry="select * from consultants_register ";
				$rs=mysql_query($Searchqry);
				$noofrows=mysql_num_rows($rs);

				$Searchqry="select * from consultants_register limit $eu, $limit";
				$rs=mysql_query($Searchqry);
				//echo $Searchqry;

				$bgcolor="#f1f1f1";

				echo "<br/>";
			   	echo "<TABLE cellpadding=0 cellspacing=0 border=1> <tr>";
				echo "<td  align='center' bgcolor='#D0D0D0' style='width:130px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Username</font></td>";

				echo "<td  align='center' bgcolor='#D0D0D0' style='width:100px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Contact person</font></td>";
				echo "<td  align='center' bgcolor='#D0D0D0' style='width:130px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Company name</font></td>";
				echo "<td  align='center' bgcolor='#D0D0D0' style='width:130px;'><font face='arial,verdana,helvetica' color='#000000' size='2'>Mobile number</font></td>";
				//echo "<td  align='center' bgcolor='#D0D0D0' style='width:100px;' >&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Email ID</font></td>";
				echo "<td  align='center' bgcolor='#D0D0D0' style='width:60px;'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Status</font></td>";
				echo "<td  align='center' bgcolor='#D0D0D0'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Edit</font></td></tr>";

			if($noofrows<=0)
			{
		
			echo "<tr><td colspan='6'><center><strong style='color:red;'><br/>Currently no users have been registered.</strong></center></td></tr>";
			}
			else
			{
			while($row=mysql_fetch_array($rs))
			{
				if($bgcolor=='#f1f1f1'){$bgcolor='#ffffff';}
				else{$bgcolor='#f1f1f1';}

				$tempid=$row["ID"];
				$username=$row["username"];
				$company_name=$row["company_name"];
				
				$length=strlen($username); 
				$name_length=strlen($company_name); 
				
				if ($length <= 17){
					$username = $username; 
				
				}
				else {
					
					$username=preg_replace('/\s+?(\S+)?$/', '', substr($username, 0, 17))."...";
				
				}
				if ($name_length <= 16){
					
					$company_name=$company_name;
					
					
				}
				else {
					
					
					$company_name=preg_replace('/\s+?(\S+)?$/', '', substr($company_name, 0, 16))."...";
					

				}
				echo "<tr bgcolor=$bgcolor>";
				echo "<td align='center' bgcolor=$bgcolor id='title' title='$row[username]'>&nbsp;<font face='Verdana' size='2'>$username</font></td>"; 

				echo "<td align='center' bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2'>$row[contact_person]</font></td>"; 
				echo "<td align='center' bgcolor=$bgcolor id='title' title='$row[company_name]'>&nbsp;<font face='Verdana' size='2'>$company_name</font></td>"; 
				echo "<td align='center' bgcolor=$bgcolor id='title' >&nbsp;<font face='Verdana' size='2'>$row[mobile_number]</font></td>"; 
				//echo "<td align='center' bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2'>$row[emailid]</font></td>"; 
						
						$status=$row['status'];
						//echo"<td>".$status."</td>";
						if($status=="Active")
						{
							$editlink="SetInactive";
							$editstatus="InActive";
						}
						else
						{
							$editlink="SetActive";
							$editstatus="Active";
						}
						echo "<td align='center' bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2'>$row[status]</font></td>"; 
						echo "<td align=left bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' width='100px'><a href='admin_set_status.php?id=".$tempid."&status=".$editstatus."&start=$start&p_f=$p_f'>".$editlink."</a></font></td>"; 
						echo"</tr>";
				}
						
						
				}
	
				echo"</table>";
				
				



				
		
				if($noofrows>$limit)
				{
				echo "<table align = 'center' width='50%'><tr><td  align='left' width='20%'>";
	
				if($p_f<>0){
				print "<a href='$page_name?start=$p_back&p_f=$p_back'><font face='Verdana' size='2'>PREV $p_limit</font></a>"; 
	}
	echo "</td><td  align='left' width='10%'>";
	


	if($back >=0 and ($back >=$p_f)) { 
               
		print "<a href='$page_name?start=$back&p_f=$p_f'><font face='Verdana' size='2'>PREV</font></a>"; 
	} 

	echo "</td><td align=center width='30%'>";
	for($i=$p_f;$i < $noofrows and $i<($p_f+$p_limit);$i=$i+$limit){
		if($i <> $eu){
			$i2=$i+$p_f;
			 
			echo " <a href='$page_name?start=$i&p_f=$p_f'><font face='Verdana' size='2'>$i</font></a> ";
		}
		else { echo "<font face='Verdana' size='4' color=red>$i</font>";}        
	}


	echo "</td><td  align='right' width='10%'>";

	if($this1 < $noofrows and $this1 < ($p_f+$p_limit)) { 
		
		print "<a href='$page_name?start=$next&p_f=$p_f'><font face='Verdana' size='2'>NEXT</font></a>";
	} 
	echo "</td><td  align='right' width='20%'>";

	if($p_fwd < $noofrows){
  	
		print "<a href='$page_name?start=$p_fwd&p_f=$p_fwd'><font face='Verdana' size='2'>NEXT $p_limit</font></a>"; 
	}
	echo "</td></tr></table>";

	
	}

     echo"</form>";
} 
	
?>
</td>
</tr>



</tbody></table>
<span class="article_separator">&nbsp;</span>
		</div>
		</td>
</tr>


</tbody></table>

													</div>		
					</div>

										<div id="rightcolumn">
						<div class="column_top">

						</div>

					</div>
						
										<div class="clr"></div>
							
			</div>
			</div>
         <div class="clr"></div>
		 </div>
		 <br/>
		 <div id="footer">
						<p style="text-align: center;">
				&copy; 2010 <a href="http://www.broov.in">Broov Information Services Private Limited</a>. All rights reserved.
			</p>

		</div>
		 </div>
	
    </body>
</html>

