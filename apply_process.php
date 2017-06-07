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
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['gender'])|| empty($_POST['email'])|| empty($_POST['addr'])|| empty($_POST['mobile'])|| empty($_POST['quali'])|| empty($_POST['profile']) )
	{
		$msg[]="Error: one of your field is empty";
	}
	//Name Validater
	if (!preg_match("/^[a-zA-Z0-9 ]*$/",($_POST['nm']))) {
       $msg[]="Error: Only letters and white space allowed in name!";
     }
	//Email Validater
	if (!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)) {
  		$msg[]="Error: Invalid email format!";
	}
	//Address Validater
	if (!preg_match("/^[a-zA-Z0-9 ]*$/",($_POST['addr']))) {
       $msg[]="Error: Only letters numbers and white space allowed in address!";
     }
	//mobile number Validater
	if (!is_numeric($_POST['mobile'])) {
       $msg[]="Error: Your Phone/Mobile Number contain some letter or special sign!"; 
     }
	if (strlen($_POST['mobile'])<9)
	{
		$msg[]=exit("Error: Phone/Mobile Number is to Small, Please Go back and Correct it.");
	}
	if (strlen($_POST['mobile'])>15)
	{
		$msg[]=exit("Error: Phone/Mobile Number is to Large, Please Go back and Correct it.");
	}
	//resume validator
	if (empty($_FILES['resume']['name']))
	{
		$msg[]="Error: Plz select a file";
	}
	if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='.DOC' || '.pdf'))
	{
		$msg[]="Error: wrong file type";
	}
	if($_FILES['resume']['error']>0)
	{
		$msg[]="Error: error uploading file";
	}
	if(file_exists("uploads/".$_FILES['resume']['name']))
	{
		$msg[]="Error: this file is already uploaded.";
	}
	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
		foreach($msg as $k)
		{
			echo "<li>".$k;
		}
	}

	else
	{
		require("includes/connect.php");
		
		$jobid=$_POST['job'];
		$nm=$_POST['nm'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];
		$mobile=$_POST['mobile'];
		$quali=$_POST['quali'];
		$profile=$_POST['profile'];
		move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
		$path = "uploads/".$_FILES['resume']['name'];
		
		
		$q="insert into employees(ee_resume,ee_fnm,ee_gender,ee_email,ee_add,ee_mobileno,
		     ee_qualification,ee_profile,jobid)
	    values ('$path','$nm','$gender','$email','$addr','$mobile','$quali','$profile','$jobid')";
		   
		mysql_query($q,$link)or die("wrong query");
		mysql_close($link);
		echo "<h2><center><b>Thank you for Applying a Job at JObHut!</b></center></a></h2>
		<p><em>we will contact you soon after checking your Portfolio.</em></em></p>";
	}
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
