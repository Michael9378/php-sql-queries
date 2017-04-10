<?php 
// Get queries use this
// returns rows in an array
function sql_get_query($sql) {
	
	// prepare connection to database
	require "dbconnect.php";
		
	// connect to database
	mysqli_connect( $dbservername, $dbusername, $dbpassword );
	
	// make the query
	$response = $conn->query($sql);
	
	// check for rows
	if($response->num_rows > 0) {
		// store rows in an array
		$rows = array();
		// push rows and return
		while( $row = $response->fetch_assoc() ) {
			array_push($rows, $row);
		}
		// close connection
		mysqli_close();
		// return rows
		return $rows;
	}
	else {
		// close connection
		mysqli_close();
		// return false if no rows found.
		return false;
	}
	
}

?>