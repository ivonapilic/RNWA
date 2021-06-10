<div class="forma">
<div class="title">Edit Faculty</div>
<form action="?controller=faculty&action=updatefaculty" method="POST">
  <div class="form-group">
    <input type="number" readonly class="form-control" placeholder="ID" name="fa" value=<?php echo $facultydetails->id?>>
  <div class="form-group">
    <input type="text" class="form-control" name="first_name"  placeholder="First name" value=<?php echo $facultydetails->first_name?>>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="last_name"  placeholder="Last name" value=<?php echo $facultydetails->last_name?>>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="department_id"  placeholder="DepartmentID" value=<?php echo $facultydetails->department_id?>>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="phone"  placeholder="Phone" value=<?php echo $facultydetails->phone?>>
  </div>
    <button type="submit" class="DodajBtn">Confirm</button>
</form> 
</div>
