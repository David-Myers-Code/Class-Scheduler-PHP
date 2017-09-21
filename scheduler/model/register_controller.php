<?php
	function delete_registration($courseID, $studentID){
		global $db;
		
		$sql = "DELETE FROM registration
			WHERE studentID = :studentID AND classID = :courseID";
			
		$statement = $db->prepare($sql);
	
		$statement->bindValue(":studentID", $studentID);
		
		$statement->bindValue(":courseID", $courseID);
		
		$statement->execute();
		
		$statement->closeCursor();		
	
	
	}

	function add_registration($courseID, $studentID){
		global $db;
		
		$sql = "INSERT into registration(classID, studentID)
			VALUES(:courseID, :studentID)";
			
		$statement = $db->prepare($sql);
	
		$statement->bindValue(":studentID", $studentID);
		
		$statement->bindValue(":courseID", $courseID);
		
		$statement->execute();
		
		$statement->closeCursor();
		
	
	}
?>