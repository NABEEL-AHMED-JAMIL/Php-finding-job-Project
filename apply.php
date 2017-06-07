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
					
					<h2 class="title"><center><b>APPLY FOR THE JOB</center></b></h2>
					<p class="meta"><center>* Please fill up the form Carefullly. &nbsp;&nbsp;&nbsp;&nbsp;* All fields are required<center></p>
					<div class="entry">
						<form action="apply_process.php" method="post" enctype="multipart/form-data">
						<table width="60%" border="0" align="center" cellspacing="2">
                        <tr>
    					<td width="27%">SELECT JOB</td>
    					<td width="73%">
                        <select name="job" style="width:205px;">
                        <option>select</option>
                        
                        <?php
                        include('includes/connect.php');
						$selcat="select * from  job_detail";
						$res=mysql_query($selcat)or die(mysql_error());
						
						while($row=mysql_fetch_array($res))
						{?>
							
							<option value="<?php  echo $row['id'];?>"><?php  echo $row['job_name'];?></option>
							
						<?php	}
						
						?>
                        
                        </td>
  						</tr>
 						<tr>
    					<td width="27%">FULL NAME:</td>
    					<td width="73%"><input type="text" name="nm" required maxlength="25" style="width:200px;"></td>
  						</tr>
    					<td>GENDER:</td>
    					<td><INPUT TYPE = "RADIO" VALUE="MALE" name="gender">MALE<INPUT TYPE = "RADIO" VALUE="female"name="gender">FEMALE</td>
    					</tr>
  						<tr>
   						<td>EMAIL:</td>
   						<td><INPUT TYPE = "TEXT" required name="email" style="width:200px;"></td>
  						</tr>
  						<tr>
   						<td>ADDRESS:</td>
    					<td><TEXTAREA name="addr"  required style="width:200px;"></TEXTAREA></td>
  						</tr>
  						<tr>
    					<td>PHONE / MOBILE NO.:</td>
    					<td><INPUT TYPE = "text" required name="mobile" maxlength="11" style="width:200px;"></td>
  						</tr>
  						<tr>
    					<td>QUALIFICATION:</td>
    					<td><INPUT TYPE = "TEXT" name="quali" required style="width:200px;"></td>
  						</tr>
  						<tr>
    					<td>PROFILE:</td>
    					<td><TEXTAREA name="profile" required style="width:200px;"></TEXTAREA></td>
  						</tr>
  						<tr>
    					<td>RESUME:</td>
    					<td><input type="file" name="resume" style="width:200px;"></td>
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
