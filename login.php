<?php session_start();
if(empty($_POST))
{
	exit;
}

if(empty($_POST['user'])||empty($_POST['pwd']))
{
	echo "You must enter all fields";
}

	require("includes/connect.php");
	
	$q = "select * from team where team_user = '".$_POST['user']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['team_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['team_user'];
			$_SESSION['eid']=$row['team_id'];
			$_SESSION['status']=1;
			header("location:admin/index.php");
		}
		else
		{
			echo "Wrong Password .";
		}
	}
	else
	{
		echo "No Such User";
	}

?>