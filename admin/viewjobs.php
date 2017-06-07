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
			<h1 class="title">Job List</h1><br>
			<p class="byline"><small></small></p>
			
			<div class="entry">
			<br>
			<table border="1" width="100%">
		<tr><td colspan="9"><h3><a style="background-image:url(images/moremneu.png); color:#FFF; font-family:Arial, Helvetica, sans-serif width:300px; height:100px;"   href="AddJobs.php">Post Job</a></h3></td></tr>
			<tr align="center">
    <td width="18%" height="61"><b> Job NAME</b></td>
   	<td width="28%"><b>Job Type</b></td>
    <td width="11%"><b>Qualification</b></td>
    <td width="31%"><b>Skills</b></td>
    <td width="8%"><b>Criterea</b></td>
       <td width="8%"><b>Discription</b></td>
          <td width="8%"><b>Date</b></td>
    <td width="5%"><b>Action</b></td>
			</tr>
			
			
			
			<?php

			require("../includes/connect.php");
			
			$q="select * from job_detail";
			$res=mysql_query($q,$link)or die("can not connect");
			
			while($row=mysql_fetch_assoc($res))
			{
				echo'
						<tr style="height:50px;">
						<td>
						'.$row['job_name'].'</td>
						<td>'.$row['job_type'].'</td>
						<td>'.$row['Qualification'].'</td>
					
						<td>'.$row['Skils'].'</a></center></td>
						<td>'.$row['Creterea'].'</a></center></td>
						<td>'.$row['discription'].'</a></center></td>
							<td>'.$row['Nts_date'].'</td>
						<td><center><a href="JobDel.php?cat='.$row['id'].'"><img src = "images/delete.png"></a></center></td>
						</tr>
			
				';
			}
			?>
			</table>
			<table border="1" width="100%">
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
