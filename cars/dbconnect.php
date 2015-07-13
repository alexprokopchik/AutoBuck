<?php

	function get_connection() {
		$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=_445team1'; //Change dbname to yours
		$userid = '_445team1'; //Change this to yours
		$password = 'jalyac'; //Change this to yours

		try {
		    $db = new PDO($dsn, $userid, $password);
		}
		catch(PDOException $e) {
			echo "Error connecting to database";
	    }
	    	return $db;
	}
?>