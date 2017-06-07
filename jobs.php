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
				<table border="10" width="100%">
		
        <tr bgcolor="#003333" style="height:50px;">
        <td colspan="7" ><h2 style="color:#FFF;">Available Jobs</h2></td>
        
			<tr  style="height:50px; color:#033;">
    <td width="18%"><b>Job Name</b></td>
   	<td width="28%"><b>Job Type</b></td>
    <td width="11%"><b>Qualification</b></td>
    <td width="10%"><b>Skills</b></td>
    <td width="8%"><b>Ceritera</b></td>
    <td width="30%"><b>Discription</b></td>
    <td width="30%"><b>Detail</b></td>
			</tr>
			
			
			
			<?php

			require("includes/connect.php");
			
			$q="select * from  job_detail";
			$res=mysql_query($q,$link)or die("can not connect");
			
			while($row=mysql_fetch_assoc($res))
			{
				echo'
						<tr>
						<td>
					'.$row['job_name'].'</td>
						<td>'.$row['job_type'].'</td>
						<td>'.$row['Qualification'].'</td>
						<td>'.$row['Skils'].'</td>
						<td>'.$row['Creterea'].'</td>
						<td>'.$row['discription'].'</td>'?>
						<th><a href="jobs_details.php?web=<?php echo $row['id']; ?>">Applicant info</a></th>
						</tr>
			
				
			<?php }
			?>
			</table>	
					

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
