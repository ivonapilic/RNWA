<?php
  class FacultyController {
    public function index() {
      // we store all the posts in a variable
      $faculty = Faculty::all();
      require_once('views/faculty/index.php');
    }
  
    public function verifyinsert(){
      require_once('views/faculty/insert.php');
    }

    public function insertfaculty()
    {
      Faculty::insertfaculty($_POST['first_name'],$_POST['last_name'],$_POST['department_id'],$_POST['phone']);
     return call('faculty', 'index');
    }
  
  public function verifyupdate()
  {
    if (!isset($_GET['fa']))
          return call('pages', 'error');
    $facultydetails = Faculty::find($_GET['fa']);
    require_once('views/faculty/update.php');
  }

  public function updatefaculty()
  {
    if (!isset($_POST['fa']))
      return call('pages', 'error');
   Faculty::updatefaculty($_POST['fa'],$_POST['first_name'],$_POST['last_name'],$_POST['department_id'],$_POST['phone']);
   return call('faculty', 'index');
  }

	public function delete() {
      if (!isset($_GET['fa']))
        return call('pages', 'error');
      Faculty::deletefaculty($_GET['fa']);
      return call('faculty', 'index');
    }

    public function verifydelete(){
      if (!isset($_GET['fa']))
          return call('pages', 'error');
          require_once('views/faculty/delete.php');
      }
  }
 ?>