<?php
	if (isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"] == true)
	{
		echo "
		<h1 > <strong> <i> Welcome back Jamal </strong> </i> </h1>
		<a href=\"login.php\"> Logout </a>";
	} else 
	{
		echo "
		<h1 > <strong> <i> Welcome to my portfolio page! </strong> </i> </h1>
		<a href=\"login.php\"> Login </a>";
	}
?>