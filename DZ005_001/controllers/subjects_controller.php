<?php
  class SubjectsController {
    public function index() {
      // we store all the posts in a variable
      $subjects = Subjects::all();
      require_once('views/subjects/index.php');
    }
  
    public function verifyinsert(){
      require_once('views/subjects/insert.php');
    }

    public function insertsubjects()
    {
      Subjects::insertsubjects($_POST['department_id'],$_POST['start_date'],$_POST['end_date'],$_POST['name'],$_POST['faculty_id']);
     return call('subjects', 'index');
    }
  
  public function verifyupdate()
  {
    if (!isset($_GET['sub']))
          return call('pages', 'error');
    $subjectsdetails = Subjects::find($_GET['sub']);
    require_once('views/subjects/update.php');
  }

  public function updatesubjects()
  {
    if (!isset($_POST['sub']))
      return call('pages', 'error');
   Subjects::updatesubjects($_POST['sub'],$_POST['department_id'],$_POST['start_date'],$_POST['end_date'],$_POST['name'],$_POST['faculty_id']);
   return call('subjects', 'index');
  }

	public function delete() {
      if (!isset($_GET['sub']))
        return call('pages', 'error');
      Subjects::deletesubjects($_GET['sub']);
      return call('subjects', 'index');
    }

    public function verifydelete(){
      if (!isset($_GET['sub']))
          return call('pages', 'error');
          require_once('views/subjects/delete.php');
      }
  }
 ?>