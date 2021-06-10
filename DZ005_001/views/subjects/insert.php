<div class="forma">
<div class="title">Add Subjects</div>
<form action="?controller=subjects&action=insertsubjects" method="POST">
  <div class="form-group">
    <input type="number" class="form-control" name="department_id" placeholder="DepartmentID">
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="start_date" placeholder="Start Date">
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="end_date" placeholder="End Date">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Name">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="faculty_id" placeholder="FacultyID">
  </div>
    <button type="submit" class="DodajBtn">Confirm</button>
</form> 
</div>