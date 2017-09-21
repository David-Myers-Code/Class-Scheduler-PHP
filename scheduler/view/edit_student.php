	<div class="row">
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
		
		<div class="small-8 large-8 columns">
			<h3>Edit Student</h3>
			<form method="post" action="index.php" id="edit_student">
				<input type="hidden" name="action"	value="edit_student">
				<input type="hidden" name="studentID"	value="<?php echo $student['studentID']; ?>">
				<label for="studentName">Name:</label>
				<input type="text" name="studentName" value="<?php echo $student['studentName']; ?>">
				<input type="submit" value="Edit Student">
			</form>
			<button><a href="index.php">Cancel</a></button>
		</div>
		
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
	</div>