<?php 
	
	function login($username, $password){
		global $db;
		
		$sql = "SELECT *
				FROM login 
				WHERE userID = :username AND password = :password";
		
		$statement = $db->prepare($sql);
		
		$statement->bindValue(":username", $username);
		
		$statement->bindValue(":password", $password);
				
		$statement->execute();
		
		$login = $statement->fetchAll(); 
		
		$statement->closeCursor();
		
		if( !empty($login) ){
		return 1;
		}
		else{
		return 0;
		}
		
	
	}