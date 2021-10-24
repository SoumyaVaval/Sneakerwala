<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from signup where username='$username' and password='$password'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$username;
	}
}
if (isset($_SESSION["login"]))
{
	header("Location: login.html");

}
if(isset($found))
		  {
			$msg='<script type="text/javascript">alert("Invalid userid or password. Please try again.");</script>';
		  }
?>
