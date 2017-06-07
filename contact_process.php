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
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['email'])|| empty($_POST['query']))
	{
		$msg[]="one of your field is empty";
	}
	//Name Validater
	if (!preg_match("/^[a-zA-Z0-9 ]*$/",($_POST['nm']))) {
       $msg[]="Error: Only letters and white space allowed in name!";
     }
	//Email Validater
	if (!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)) {
  		$msg[]="Error: Invalid email format!";
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
		
		$nm=$_POST['nm'];
		$email=$_POST['email'];
		$query=$_POST['query'];
		
		$q="insert into contact(cont_fnm,cont_email,cont_query)
		   values ('$nm','$email','$query')";
		
		mysql_query($q,$link)or die("wrong query");
		mysql_close($link);
		echo "<h2><center><b>Thank you for contacting us.</b></center></a></h2>
		<p><em>We have received your enquiry and will respond to you within 24 hours.&nbsp;</em>
		<em>For urgent enquiries please call us on one of the telephone numbers below.</em></p>";
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