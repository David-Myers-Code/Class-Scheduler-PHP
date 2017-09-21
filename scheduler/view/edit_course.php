	
	<div class="row">
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
		
		<div class="small-8 large-8 columns">
			<h3>Edit Course</h3>
			<form method="post" action="index.php" id="edit_course">
				<input type="hidden" name="action"	value="edit_course">
				<input type="hidden" name="courseID" value="<?php echo $course['classID']; ?>">
				<label for="courseName">Name:</label>
				<input type="text" name="courseName" value="<?php echo $course['className']; ?>">				
				<input type="submit" value="Edit Course">
			</form>
			<button><a href="index.php">Cancel</a></button>
		</div>
		
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
	</div>