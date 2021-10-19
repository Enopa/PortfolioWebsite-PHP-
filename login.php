<?php session_Start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to my Portfolio!</title>
	<link href="reset.css" rel="stylesheet"/>
	<link href="loginstyle.css" rel="stylesheet"/>
  </head>
  <body>
  
	<section class="LoginForm">
		<form method="POST">
			<h1> LOGIN </h1>
			<p>
				<label> Username: </label> <br>
				<input type="text" name="username" required> <br>
				<label> Password: </label> <br>
				<input type="password" name="password" required> <br>
			</p>
			<input type="submit">
			
			<?php
							
				//IF USER IS ALREADY LOGGED IN, THEY WILL BE ROUTED STRAIGHT BACK TO THE HOME PAGE AND THE SESSION IS DESTROYED
				if (isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"] == true)
				{
					$_SESSION["LoggedIn"] = false;
					session_Destroy();
					header("LOCATION: home.php");
				}
				
				
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "maindb";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * FROM logins";
				$result = $conn->query($sql);
				
				$row = $result->fetch_assoc();
				
				if ($_SERVER ["REQUEST_METHOD"] == "POST")
				{
					if ($_POST["username"] == $row["username"] && $_POST["password"] == $row["password"])
					{
						$_SESSION["LoggedIn"] = true;
						header("LOCATION: addEntry.php");
					} else 
					{
						echo "<br><br> PASSWORD OR USERNAME INCORRECT";
					}
					
				}
				
		    ?>
		</form>
	</section>
	
  </body>
</html>