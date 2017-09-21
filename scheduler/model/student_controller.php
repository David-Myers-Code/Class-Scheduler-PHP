<?php
	function get_students(){
		global $db;
		
		$sql = "SELECT *
				FROM student 
				ORDER BY studentName";
		
		$students = $db->prepare($sql);
		
		$students->execute();
		
		return $students;	
	}
	function get_single_student($studentID){
		global $db;
		
		$sql = "SELECT *
				FROM student 
				WHERE studentID = :studentID";
		
		$statement = $db->prepare($sql);
		
		$statement->bindValue(":studentID", $studentID);		
		
		$statement->execute();
		
		$student = $statement->fetch();
		
		return $student;	
	}
	
	function add_student($studentName){
		global $db;
		
		$sql = "INSERT into student(studentID, studentName)
			VALUES(null, :studentName)";
			
		$statement = $db->prepare($sql);
	
		$statement->bindValue(":studentName", $studentName);
		
		$statement->execute();
		
		$statement->closeCursor();
		
	
	}
	
	function delete_student($studentID){
		global $db;
		
		$sql = "DELETE FROM student
			WHERE studentID = :studentID";
			
		$statement = $db->prepare($sql);
	
		$statement->bindValue(":studentID", $studentID);
		
		$statement->execute();
		
		$statement->closeCursor();	
	
	
	
	}
	function get_student_courses($studentID){
		global $db;
		
		$sql = "SELECT *
				FROM registration 
					INNER JOIN class 
						ON registration.classID = class.classID
				WHERE studentID = :studentID";
		
		$statement = $db->prepare($sql);
		
		$statement->bindValue(":studentID", $studentID);		
		
		$statement->execute();
		
		$student = $statement->fetchAll();
		
		return $student;	
	}
	
	function edit_student($studentID, $studentName){
		global $db;
		
		$sql = "UPDATE student
				SET studentName = :studentName
				WHERE studentID = :studentID";
			
		$statement = $db->prepare($sql);
	
		$statement->bindValue(":studentID", $studentID);
		
		$statement->bindValue(":studentName", $studentName);
		
		$statement->execute();
		
		$statement->closeCursor();
	
	}

?>