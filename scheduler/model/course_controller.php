<?php
	function get_courses(){
		global $db;
		
		$sql = "SELECT *
				FROM class INNER JOIN teacher
					ON class.teacherID = teacher.teacherID
				ORDER BY className";
		
		$statement = $db->prepare($sql);
		
		$statement->execute();
		
		$courses = $statement->fetchAll();
		
		return $courses;	
	}
	function get_single_course($courseID){
		global $db;
		
		$sql = "SELECT *
				FROM class 
				WHERE classID = :courseID";
		
		$statement = $db->prepare($sql);
		
		$statement->bindValue(":courseID", $courseID);		
		
		$statement->execute();
		
		$course = $statement->fetch();
		
		return $course;	
	}
	
		function get_teachers(){
		global $db;
		
		$sql = "SELECT *
				FROM teacher";
		
		$teachers = $db->prepare($sql);
		
		$teachers->execute();
		
		return $teachers;	
	}
	
	function add_course($courseName, $teacherName){
		global $db;
		
		$sql = "INSERT into class(classID, teacherID, className)
			VALUES(null, :teacherName, :courseName)";
			
		$statement = $db->prepare($sql);
	
		$statement->bindValue(":courseName", $courseName);
		
		$statement->bindValue(":teacherName", $teacherName);
		
		$statement->execute();
		
		$statement->closeCursor();
		
	
	}
	
	function delete_course($courseID){
		global $db;
		
		$sql = "DELETE FROM class
			WHERE classID = :courseID";
			
		$statement = $db->prepare($sql);
	
		$statement->bindValue(":courseID", $courseID);
		
		$statement->execute();
		
		$statement->closeCursor();	
	
	
	
	}
	function get_course_registration($courseID){
		global $db;
		
		$sql = "SELECT *
				FROM registration INNER JOIN student 
					ON registration.studentID = student.studentID
				WHERE classID = :courseID";
		
		$statement = $db->prepare($sql);
		
		$statement->bindValue(":courseID", $courseID);		
		
		$statement->execute();
		
		$course = $statement->fetchAll();
		
		return $course;	
	}
	
	function edit_course($courseID, $courseName){
		global $db;
		
		$sql = "UPDATE class
				SET className = :courseName
				WHERE classID = :courseID";
			
		$statement = $db->prepare($sql);
	
		$statement->bindValue(":courseID", $courseID);
		
		$statement->bindValue(":courseName", $courseName);
		
		$statement->execute();
		
		$statement->closeCursor();
	
	}

?>