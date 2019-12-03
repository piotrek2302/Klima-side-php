<?php
	session_start();
    $SALT = 'IT2_2020';
	
	$USER = $_POST['user'];
	$PASS = $_POST['pass'];
	
	$USER = stripcslashes($USER);
	$PASS = stripcslashes($PASS);
	// $USER = mysql_real_escape_string($USER);
	// $USER = mysql_real_escape_string($PASS);
	
	$PW= sha1($SALT.$PASS);
	
	$mysqli = new mysqli("localhost", "root", "", "users");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";
	
	
	$RESULT = mysqli_query($mysqli, "select * from users where Username = '{$USER}' and DB_Password = '{$PW}'");
	$ROW = mysqli_fetch_array($RESULT);
	if ($ROW['Username'] == $USER && $ROW['DB_Password'] == $PW) {
		header('Location: backend.php');
		$_SESSIONS['bruker'] = $bruker;
		
	}
	
	else {
         header("Location: uvelkommen.php");
	}
?>