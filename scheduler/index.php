<?php
	session_start();
	
	error_reporting(E_ALL);
	
	//views
	require("view/header.php");
	require("view/footer.php");
	
	//models
	require("model/db_controller.php");
	require("model/course_controller.php");
	require("model/student_controller.php");
	require("model/register_controller.php");
	require("model/login_controller.php");
	
	//form processing
	$action = filter_input(INPUT_POST, 'action');
	
		
	if($action == "login"){
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');
		
		if(!empty($username)  && !empty($password)){
		$_SESSION["login"] = login($username, $password);
		}
	}
	
	if($action == 'logout'){
	$_SESSION = array();
	session_destroy();

	}
	
//Check session login
if($_SESSION["login"] == 0){
	include("view/login.php");
	}

else{

	if($action == "add_course"){
		$courseName = filter_input(INPUT_POST, 'courseName');
		$teacherName = filter_input(INPUT_POST, 'teacherName');
		
		if(!empty($courseName) && !empty($teacherName)){
		add_course($courseName, $teacherName);
		}
		
		}
	else if ($action == "delete_course"){
		$courseID = filter_input(INPUT_POST, 'courseID');
		
		delete_course($courseID);
	
	
	}
	else if($action == "add_student"){
		$studentName = filter_input(INPUT_POST, 'studentName');
	
		if(!empty($studentName)){
		add_student($studentName);
		}
	
		}
	else if ($action == "delete_student"){
		$studentID = filter_input(INPUT_POST, 'studentID');
		
		delete_student($studentID);
	
	
	}
	else if($action == "student_courses_view"){
		$studentID = filter_input(INPUT_POST, 'studentID');
		
		$student = get_student_courses($studentID);
		$studentName = get_single_student($studentID);
		$courses = get_courses();
		
		include("view/student_schedule.php");
	}
	
	else if($action == "view_registration"){
		$courseID = filter_input(INPUT_POST, 'courseID');
		
		$courseName = get_single_course($courseID);
		
		$courses = get_course_registration($courseID);
		
		include("view/course_register.php");	
	
	}
	else if($action == "edit_student_view"){
		$studentID = filter_input(INPUT_POST, 'studentID');
		$student = get_single_student($studentID);
		include("view/edit_student.php");
		
	}

	else if($action == "edit_course_view"){
		$courseID = filter_input(INPUT_POST, 'courseID');
		$course = get_single_course($courseID);
		include("view/edit_course.php");
	
	}
	
	else if($action == "edit_student"){
		$studentID = filter_input(INPUT_POST, 'studentID');
		$studentName = filter_input(INPUT_POST, 'studentName');
		
		if(!empty($studentName)){		
			edit_student($studentID, $studentName);
			}
	}

	else if($action == "edit_course"){
		$courseID = filter_input(INPUT_POST, 'courseID');
		$courseName = filter_input(INPUT_POST, 'courseName');
		
		if(!empty($courseName)){
			edit_course($courseID, $courseName);
		}
	}
	
	else if($action == 'add_student_course'){
		$courseID = filter_input(INPUT_POST, 'courseID');
		$studentID = filter_input(INPUT_POST, 'studentID');	
		
		add_registration($courseID, $studentID);
				
		$student = get_student_courses($studentID);
		$studentName = get_single_student($studentID);
		$courses = get_courses();
		
		include("view/student_schedule.php");
	}
	
	else if($action == 'delete_registration')
	{
		$courseID = filter_input(INPUT_POST, 'courseID');
		$studentID = filter_input(INPUT_POST, 'studentID');
		
		delete_registration($courseID, $studentID);
		
		$student = get_student_courses($studentID);
		$studentName = get_single_student($studentID);
		$courses = get_courses();
		
		include("view/student_schedule.php");
	}


	
		
		$students = get_students();
		$courses = get_courses();
		$teachers = get_teachers();
		include("view/main.php");
		
		
		
	
}



















	