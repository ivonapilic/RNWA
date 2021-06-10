<?php
  class StudentsController {
    public function index() {
      // we store all the posts in a variable
      $students = Students::all();
      require_once('views/students/index.php');
    }
  
    public function verifyinsert(){
      require_once('views/students/insert.php');
    }

    public function insertstudents()
    {
      Students::insertstudents($_POST['first_name'],$_POST['last_name'],$_POST['department_id'],$_POST['phone'],$_POST['admission_date'],$_POST['cet_marks']);
     return call('students', 'index');
    }
  
  public function verifyupdate()
  {
    if (!isset($_GET['stu']))
          return call('pages', 'error');
    $studentsdetails = Students::find($_GET['stu']);
    require_once('views/students/update.php');
  }

  public function updatestudents()
  {
    if (!isset($_POST['stu']))
      return call('pages', 'error');
   Students::updatestudents($_POST['stu'],$_POST['first_name'],$_POST['last_name'],$_POST['department_id'],$_POST['phone'],$_POST['admission_date'],$_POST['cet_marks']);
   return call('students', 'index');
  }

	public function delete() {
      if (!isset($_GET['stu']))
        return call('pages', 'error');
      Students::deletestudents($_GET['stu']);
      return call('students', 'index');
    }

    public function verifydelete(){
      if (!isset($_GET['stu']))
          return call('pages', 'error');
          require_once('views/students/delete.php');
      }
  }
 ?>