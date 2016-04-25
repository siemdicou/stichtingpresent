<?php
    // $time = "<script>(millisToMinutesAndSeconds(global.sec))</script>";
    // $name = "<script>data.name</script>";
	
	// const DB_HOST = 'localhost';
	// const DB_USERNAME = 'root';
	// const DB_PASSWORD = '';
	// const DB_NAME = 'stichtingpresent';

	const DB_HOST = 'rdbms.strato.de';
	const DB_USERNAME = 'U2552859';
	const DB_PASSWORD = 'stichtingpresent2016';
	const DB_NAME = 'DB2552859';

	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: 
    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$result = $mysqli->query("SELECT * FROM highscores ORDER BY seconds DESC");
$row = $result->fetch_assoc();
    





?>
