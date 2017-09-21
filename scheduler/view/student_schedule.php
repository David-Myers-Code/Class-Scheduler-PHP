	<div class="row">
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
<div class="small-8 large-8 columns">
		<h3><?php echo $studentName['studentName']; ?></h3>

		<table>
		<?php foreach($student as $course):?>
			<tr>
				<td><?php echo $course['className']; ?></td>
				<td>
							<form method="post" action="index.php">
								<input type="hidden" name="action" value="delete_registration" />
								<input type="hidden" name="courseID" value="<?php echo $course['classID']; ?>" />
								<input type="hidden" name="studentID" value="<?php echo $course['studentID']; ?>" />
								<input type="submit" value="Remove From Class"/>
							</form>			
				</td>
			</tr>
			<?php endforeach;?>
		</table>
		
			<h3>Add Student to Course</h3>
			<form method="post" action="index.php" id="add_student_course">
				<input type="hidden" name="action"	value="add_student_course">
				<input type="hidden" name="studentID"	value="<?php echo $studentName['studentID']; ?>">
				<label for="courseName">Course Name:</label>
				<select name="courseID">
					<?php foreach($courses as $course):?>
					<option value="<?php echo $course['classID']; ?>">
					<?php echo $course['className']; ?>
					</option>
					<?php endforeach;?>
				</select>				
				<input type="submit" value="Enroll Student">
			</form>
		<button><a href="index.php">Cancel</a></button>
		
	</div>

		<div class="small-2 large-2 columns">
			<p></p>
		</div>

	
