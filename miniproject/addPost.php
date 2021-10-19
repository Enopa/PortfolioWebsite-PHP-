<?php
	session_Start();
	if (isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"] == true)
	{
		echo 
		"<form id=\"BlogEntry\" method = \"GET\">
			<h2> Add a new blog post </h2>
			<p>
				<label> Header </label> <br>
				<input id = \"header\" name= \"header\" required> <br>
				<label> Entry </label> <br>
				<textarea id = \"entry\" placeholder=\"Enter blog post here\" name = \"blog_entry\" required></textarea><br>
			</p>
			<button type=\"submit\" onClick=\"return preventDefault()\"> Submit </input>
			<button type=\"button\" onclick=\"clearForm()\"> Clear </button>
			<button type=\"button\" onClick=\"preview()\"> Preview </button>
		</form>";
		
		$mysqli = new mysqli("localhost", "root", "", "maindb");
									
		// Checks connection
		if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}

		
		if (($_SERVER ["REQUEST_METHOD"] == "GET") && (isset($_GET["header"])) && (isset($_GET["blog_entry"])))
		{
			$header = $_GET["header"];
			$date = date("Y-m-d h:i:sa");
			$entry = $_GET["blog_entry"];
			
			$sql = "INSERT INTO BLOGPOSTS (header, date, entry) VALUES ('$header', '$date', '$entry')";
			$retval = mysqli_query( $mysqli, $sql );
			
			$_GET["header"] = null;
			$_GET["blog_entry"] = null;
			header("LOCATION: blog.php");
		}	
	} else
	{
		header("LOCATION: login.php");
	}	
?>