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
					
					<h2 class="title"><center><b>Cotact Us</b></center></a></h2>
					<p class="meta"><center>please fill this form if you have any query</center></p>
					<div class="entry">
					<form action="contact_process.php" method="post">
					<table width="60%" border="0" align="center" cellspacing="2">
  					<tr>
    				<td width="27%">Full Name: </td>
    				<td width="73%"><input type="text" name="nm"></td>
  					</tr>
  					<tr>
   					<td>Email Address:</td>
    				<td><input type="text" name="email"></td>
  					</tr>
  					<tr>
    				<td>Query:</td>
    				<td><textarea name="query"></textarea></td>
 					</tr>
  					<tr>
   					<td>&nbsp;</td>
    				<td><input type="submit" value="submit"></td>
  					</tr>
					</table>
					</form>
						
					</div>
				</div>
				
			</div>
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
