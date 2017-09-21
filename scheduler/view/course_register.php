	<div class="row">
		<div class="small-2 large-2 columns">
			<p></p>
		</div>
<div class="small-8 large-8 columns">
		<h3><?php echo $courseName['className']; ?></h3>

		<table>
		<?php foreach($courses as $course):?>
			<tr>
				<td><?php echo $course['studentName']; ?></td>

			</tr>
			<?php endforeach;?>
		</table>
		<p>Add and delete student registrations from the students schedule</p>

		<button><a href="index.php">Cancel</a></button>
		
	</div>