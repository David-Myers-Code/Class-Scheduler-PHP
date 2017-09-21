	<div class="row">
		<form method="post" action="index.php">
			<input type="hidden" name="action" value="logout" />
			<input type="submit" value="Logout"/>
		</form>
	</div>
	
	<div class="row">
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
		
		<div class="small-8 large-8 columns">
			<h3>Courses</h3>
	
			<table>
			<tr>
				<th>Course Name</th>
				<th>Teacher</th>
				<th>View Enrolled Students</th>
				<th>Edit Name</th>
				<th>Must unenroll all students before deleting</th>
			</tr>
	
			<?php foreach($courses as $course):?>
			<tr>
				<td>
					<?php echo $course['className']; ?>
				</td>
				<td>
					<?php echo $course['teacherName']; ?>
				</td>
				<td>
					<form method="post" action="index.php">
						<input type="hidden" name="action" value="view_registration" />
						<input type="hidden" name="courseID" value="<?php echo $course['classID']; ?>" />
						<input type="submit" value="View Registration"/>
					</form>				
				</td>
				<td>
					<form method="post" action="index.php">
						<input type="hidden" name="action" value="edit_course_view" />
						<input type="hidden" name="courseID" value="<?php echo $course['classID']; ?>" />
						<input type="submit" value="Edit Course"/>
					</form>
				</td>
				<td>
					<form method="post" action="index.php">
						<input type="hidden" name="action" value="delete_course" />
						<input type="hidden" name="courseID" value="<?php echo $course['classID']; ?>" />
						<input type="submit" value="Delete Course"/>
					</form>
				</td>
			</tr>
			<?php endforeach;?>
			</table>
		</div>
		
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
		
	</div>
	
	
	<div class="row">
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
		
		<div class="small-8 large-8 columns">
			<h3>Add Course</h3>
			<form method="post" action="index.php" id="add_course">
				<input type="hidden" name="action"	value="add_course">
				<label for="courseName">Name:</label>
				<input type="text" name="courseName">
				<label for="teacherName">Teacher:</label>
				<select name="teacherName">
					<?php foreach($teachers as $teacher):?>
					<option value="<?php echo $teacher['teacherID']; ?>">
					<?php echo $teacher['teacherName']; ?>
					</option>
					<?php endforeach;?>
				</select>				
				<input type="submit" value="Add Course">
			</form>
		</div>
		
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
	</div>
	
	
	
	<div class="row">
		<hr>
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
		
		<div class="small-8 large-8 columns">
			<h3>Students</h3>
	
			<table>
				<tr>
					<th>Student Name</th>
					<th>View Enrolled Courses</th>
					<th>Edit Name</th>
					<th>Must unenroll from all courses before deleting</th>
				</tr>
				<?php foreach($students as $student):?>
				<tr>
					<td>
						<?php echo $student['studentName']; ?>
					</td>
					
					
						
					<td>
						<form method="post" action="index.php">
							<input type="hidden" name="action" value="student_courses_view" />
							<input type="hidden" name="studentID" value="<?php echo $student['studentID']; ?>" />
							<input type="submit" value="View Courses"/>
						</form>
					</td>
					<td>
						<form method="post" action="index.php">
							<input type="hidden" name="action" value="edit_student_view" />
							<input type="hidden" name="studentID" value="<?php echo $student['studentID']; ?>" />
							<input type="submit" value="Edit Student"/>
						</form>
					</td>
					
						
					<td>
						<form method="post" action="index.php">
							<input type="hidden" name="action" value="delete_student" />
							<input type="hidden" name="studentID" value="<?php echo $student['studentID']; ?>" />
							<input type="submit" value="Delete Student"/>
						</form>
					</td>	
				</tr>
				<?php endforeach;?>
			</table>
		</div>
		
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
	</div>
	
	<hr>
	
	<div class="row">
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
		
		<div class="small-8 large-8 columns">
			<h3>Add Student</h3>
			<form method="post" action="index.php" id="add_student">
				<input type="hidden" name="action"	value="add_student">
				<label for="studentName">Name:</label>
				<input type="text" name="studentName">
				<input type="submit" value="Add Student">
			</form>
		</div>
		
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
	</div>