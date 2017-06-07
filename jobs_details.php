<?php session_start();

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
                <?php
				$web=$_GET['web'];
				if(($web==1) || ($web==2)|| ($web==3)|| ($web==4) || ($web==5) || ($web==6))
				{?>
				<table border="10" width="100%">
		<tr bgcolor="#003333" style="height:50px;">
        <td colspan="6" ><h2 style="color:#FFF;">Applicant Info</h2></td>
        
			<tr style="height:50px; color:#033;">
    <td width="18%"><b>NAME</b></td>
   	<td width="28%"><b>Email</b></td>
    <td width="11%"><b>Gender</b></td>
    <td width="10%"><b>Qualification</b></td>
    <td width="8%"><b>Job</b></td>
    <td width="30%"><b>Profile</b></td>
			</tr>
			
			
			
			<?php

			require("includes/connect.php");
			
			$q="select * from  job_detail";
			$res=mysql_query($q,$link)or die("can not connect");
			
			while($row=mysql_fetch_assoc($res))
			{
				
				
				$q="select * from   employees where jobid='$web'";
			$res=mysql_query($q,$link)or die("can not connect");
			
				while($erow=mysql_fetch_assoc($res))
			{
				echo'
						<tr>
						<td>
					'.$erow['ee_fnm'].'</td>
						<td>'.$erow['ee_email'].'</td>
						<td>'.$erow['ee_gender'].'</td>
						<td>'.$erow['ee_qualification'].'</td>
						<td>'.$row['job_name'].'</td>
						<td>'.$erow['ee_profile'].'</td>'?>
						
						</tr>
			
				
			<?php }}
			?>
			</table>	
					
<?php }
?>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
