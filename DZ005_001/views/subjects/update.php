<div class="forma">
<div class="title">Edit Subjects</div>
<form action="?controller=subjects&action=updatesubjects" method="POST">
  <div class="form-group">
    <input type="number" readonly class="form-control" placeholder="ID" name="sub" value=<?php echo $subjectsdetails->id?>>
  <div class="form-group">
    <input type="number" class="form-control" name="department_id" placeholder="DepartmentID" value=<?php echo $subjectsdetails->department_id?>>
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="start_date" placeholder="Start Date" value=<?php echo $subjectsdetails->start_date?>>
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="end_date" placeholder="End Date" value=<?php echo $subjectsdetails->end_date?>>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Name" value=<?php echo $subjectsdetails->name?>>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="faculty_id" placeholder="FacultyID" value=<?php echo $subjectsdetails->faculty_id?>>
  </div>
    <button type="submit" class="DodajBtn">Confirm</button>
</form> 
</div>