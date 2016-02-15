<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

	//_____________________________

	// Lees items uit

	// prepare query to select all data from the table books (MAAK EEN QUERY DIE ALLE ITEMS OPHAALT)
	$sql = "SELECT * FROM dingen";
	
	// execute the query (Voer de query uit.) 
	$result = $conn->query($sql);
	
	// fetch all selected books to store in variable: booksList (Sla alle resultaten op.)
	$resultaat = $result->fetch_all(MYSQLI_ASSOC);

	var_dump($variable);
 ?>

 



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>