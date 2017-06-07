
			<ul>
				<li><a href="index.php" class="first">Home</a></li>
				<li><a href="applicants.php">Applicants</a></li>
				<li><a href="query.php"> Messages</a></li>
                <li><a href="viewjobs.php">Jobs</a></li>
				<?php
	
				if(isset($_SESSION['status']))
				{
					echo '<li><a href="logout.php">Logout</a></li>';
				}
	
				?>
				<li><a href="../">Back to Front Page</a></li>
				
			</ul>
		