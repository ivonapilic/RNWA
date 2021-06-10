<div class="forma">
<div class="title">Edit Students</div>
<form action="?controller=students&action=updatestudents" method="POST">
  <div class="form-group">
    <input type="number" readonly class="form-control" placeholder="Roll_num" name="stu" value=<?php echo $studentsdetails->roll_num?>>
  <div class="form-group">
    <input type="text" class="form-control" name="first_name" placeholder="First name" value=<?php echo $studentsdetails->first_name?>>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="last_name" placeholder="Last name" value=<?php echo $studentsdetails->last_name?>>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="department_id" placeholder="DepartmentID" value=<?php echo $studentsdetails->department_id?>>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="phone" placeholder="Phone" value=<?php echo $studentsdetails->phone?>>
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="admission_date" placeholder="Admission date" value=<?php echo $studentsdetails->admission_date?>>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="cet_marks" placeholder="Cet_marks" value=<?php echo $studentsdetails->cet_marks?>>
  </div>
    <button type="submit" class="DodajBtn">Confirm</button>
</form> 
</div>
