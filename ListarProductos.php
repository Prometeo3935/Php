<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "laravellasmarias";

	require 'header.html' ;

	echo "<table border='1'>";
    echo "<tr><th>Firstname</th><th>Lastname</th> <th>Age</th> <th>Age</th> </tr>";
    echo "<tr> <td>Jill</td><td>Smith</td> <td>50</td> </tr>";
    
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT id, descripcion, precio, fecha_inicio FROM productos where categoria_id = 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr>";
          	echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['descripcion'] . "</td>";
			echo "<td>" . $row['precio'] . "</td>";
			echo "<td>" . $row['fecha_inicio'] . "</td>";
			echo "</tr>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
    echo "</table>";
	require 'footer.html';

?>