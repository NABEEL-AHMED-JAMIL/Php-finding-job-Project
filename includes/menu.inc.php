
<ul>
		<li><a href="index.php" class="first">Home</a></li>
	
		<?php
		
			
			echo '<li><a href="jobs.php">Jobs</a></li>';
			
			
			
		
				if(!isset($_SESSION['employee']))
				{
					 echo '<li><a href="apply.php">Apply</a></li>';
					
					
				}
	
		?>

		<li><a href="contact.php">Contact Us</a></li>


		<?php
	
				if(isset($_SESSION['status'])&& $_SESSION['unm']=='admin')
				{
					echo '<li><a href="admin/index.php">Admin</a></li>';
				}
				else
					echo '<li><a href="admin.php">Admin</a></li>';
	
		?>

		
		<?php
	
				if(isset($_SESSION['status']))
				{
					echo '<li><a href="logout.php">Logout</a></li>';
				}
	
				?>
</ul>
		