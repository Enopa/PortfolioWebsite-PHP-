<?php			
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "maindb";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	//--------OBTAINING THE DATA-------------
	
	if (isset($_POST["month"]))
	{
		if ($_POST["month"] != -1)
		{
			$month = $_POST["month"];
			$sql = "SELECT * FROM blogposts WHERE MONTH(date) = ". $month;
		} else 
		{
			$sql = "SELECT * FROM blogposts";
		}
	} else 
	{
		$sql = "SELECT * FROM blogposts";
	}
	
	$result = $conn->query($sql);
	$entries = array();
	
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) 
	  {
		$entries[] = $row;
		
	  }
	} else {
	  echo "Nothing has been posted yet";  
	}
	
	if (count($entries) > 0)
	{
		krsort($entries);
	}
	
	foreach($entries as $key => $value)
	{
		echo "<div id=\"blogposts\"><h2 id=\"header\">". $value["header"]. "</h2>".
		"<h1>". date_format(date_create($value["date"]), "d/m/Y H:i") . "</h1>".
		$value["entry"] . "</div><hr>";
	}
	
	$conn->close();
?>