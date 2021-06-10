<div class="forma">
	<div class="title">Add Faculty</div>
	<form action="?controller=faculty&action=insertfaculty" method="POST">
		<div class="form-group">
			<input type="text" class="form-control" name="first_name" placeholder="First name">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="last_name" placeholder="Last name">
		</div>
		<div class="form-group">
			<input type="number" class="form-control" name="department_id" placeholder="DepartmentID">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="phone" placeholder="Phone">
		</div>
			<button type="submit" class="DodajBtn">Confirm</button>
	</form> 
</div>