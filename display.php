<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','library');
	
	// prepare query to select all data from the table books
	$sql = "SELECT * FROM books";
	
	// execute the query 
	$result = $connection->query($sql);
	
	// fetch all selected books to store in variable: booksList
	$booksList = $result->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html>
<body>
	<table>
<?php 
	echo "Hier volgt de array van arrays:<br>";
	var_dump($booksList);
	// repeat for each book in booksList
	echo "Hier volgen de losse arrays:";
	foreach($booksList as $){ ?>
		<tr>
			<td><?php echo $['id']; ?></td>
			<td><?php echo $['title']; ?></td>
		</tr>
																		
<?php	} // end foreach
?>
	</table>
</body>
</html>