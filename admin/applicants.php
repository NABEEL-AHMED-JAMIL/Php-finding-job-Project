<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
?>

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
		<div class="post">
			<h1 class="title">All Aplications</h1>
			<p class="byline"><small></small></p>
			
			<div class="entry">
			<br>
			<table border="1" width="100%">
		
			<tr>
    <td width="18%"><b>NAME</b> / Email/ Phone</td>
   	<td width="28%"><b>Address</b></td>
    <td width="11%"><b>Qualification</b></td>
    <td width="31%"><b>Profile</b></td>
    <td width="8%"><b>Resume</b></td>
    <td width="5%"><b>Del</b></td>
			</tr>
			
			
			
			<?php

			require("../includes/connect.php");
			
			$q="select * from employees";
			$res=mysql_query($q,$link)or die("can not connect");
			
			while($row=mysql_fetch_assoc($res))
			{
				echo'
						<tr>
						<td>
						'.$row['ee_fnm'].'<br><small>'.$row['ee_email'].'<br><small>'.$row['ee_mobileno'].'</small><br></td>
						<td>'.$row['ee_add'].'</td>
						<td>'.$row['ee_qualification'].'</td>
						<td>'.$row['ee_profile'].'</td>
						<td><center><a href="../'.$row['ee_resume'].'" target="blank"><img src = "images/monitor.png"></a></center></td>
						<td><center><a href="Applicants_delete.php?cat='.$row['ee_fnm'].'"><img src = "images/delete.png"></a></center></td>
						</tr>
			
				';
			}
			?>
			</table>
			
			</div>
			<p class="meta"></p>
		</div>
		
	</div>
	<!-- end content -->
	
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
