<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	    case 'students':
        require_once('models/students.php');
		$controller = new StudentsController();
      break;
      case 'faculty':
        require_once('models/faculty.php');
		$controller = new FacultyController();
      break;
      case 'subjects':
        require_once('models/subjects.php');
		$controller = new SubjectsController();
      break;
    
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' 		=> ['home', 'error'],
                       'students' 	=> ['index','verifyinsert','insertstudents','verifyupdate','updatestudents','delete','verifydelete'],
                       'faculty' 	=> ['index','verifyinsert','insertfaculty','verifyupdate','updatefaculty','delete','verifydelete'],
                       'subjects' 	=> ['index','verifyinsert','insertsubjects','verifyupdate','updatesubjects','delete','verifydelete']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>