<?php
    // Connects to the database, and returns a PDO object
    function connectToDB() {
		try {
			$dbName = 'voipSMS';
			$dbUser = 'postgres';
			$dbHost = 'postgresql://postgres:EgBxZofoCsAScNidYowlGaMNxPJBnaHh@postgres.railway.internal:5432/railway';
			$dbPass = 'EgBxZofoCsAScNidYowlGaMNxPJBnaHh';

			$db = new PDO("mysql:host={$dbHost};dbname={$dbName}", 
				$dbUser, $dbPass);
			
			// Enable error printing if something breaks
			//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $db;
		} catch(PDOException $ex) {
			echo "<div class='alert alert-danger'><strong>Critical error!</strong>
				Cannot connect to the database! Bailing out.</div>";
			exit(1);
		}
    }  
?>
