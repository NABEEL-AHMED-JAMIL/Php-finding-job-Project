<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
include('../includes/connect.php');
if(isset($_POST['addjob']))
{    
    $date  = date('D_M_Y');
	$name=$_POST['name'];
	$type=$_POST['type'];
	$qual=$_POST['qual'];
	$skills=$_POST['skills'];
	$critera=$_POST['critera'];
	$disc=$_POST['disc'];
	$ins="insert into  job_detail (job_name,job_type,Qualification,Skils,Creterea,discription,Nts_date)values('$name','$type','$qual','$skills','$critera','$disc','$date')";
	mysql_query($ins)or die(mysql_error());
	echo "<script>parent.location.href = 'viewjobs.php';</script>";
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
			<h1 class="title">Add Jobs</h1>
			<p class="byline"><small></small></p>
			
			<div class="entry">
			<br>
            <form name="formadd" method="post" >
			<table border="0" width="80%" bgcolor="#003333" style="color:#FFF;">
		
			<tr>
    <td >Job Name</td>
   	<td ><label for="name"></label>
   	  <input type="text" name="name" id="name"></td>
    
			</tr>
			
            <tr>
    <td >Job type</td>
   	<td > <input type="text" name="type" id="name"></td>
    
			</tr>
			
            <tr>
    <td >Qualification</td>
   	<td > <input type="text" name="qual" id="name"></td>
    
			</tr>
			
            <tr>
    <td >Skills</td>
   	<td > <input type="text" name="skills" id="name"></td>
    
			</tr>
			
            <tr>
    <td >Critera</td>
   	<td > <input type="text" name="critera" id="name"></td>
    
			</tr>
			
            <tr>
    <td >Discription</td>
   	<td >
   	  <textarea name="disc" id="disc" cols="45" rows="5"></textarea></td>
    
			</tr>
            
            <tr>
    <td colspan="2" ><input type="submit" name="addjob" value="Add Job" style="background-color:#A45200; width:100px; color:#FFF;"></td>
   
    
			</tr>
			
			
			
			
			</table>
			</form>
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
