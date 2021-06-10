<?php
  class Subjects  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $department_id;
    public $start_date;
    public $end_date;
    public $name;
    public $faculty_id;


    public function __construct($id,$department_id,$start_date,$end_date,$name,$faculty_id) {
      $this->id      = $id;
      $this->department_id      = $department_id;
      $this->start_date      = $start_date;
      $this->end_date      = $end_date;
      $this->name      = $name;
      $this->faculty_id      = $faculty_id;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM subjects');
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $sub) {
        $list[] = new Subjects($sub['id'], $sub['department_id'], $sub['start_date'],$sub['end_date'],$sub['name'],$sub['faculty_id']);
      }

      return $list;
    }

    public static function find($sub) {
      $db = Db::getInstance();
      $sub = intval($sub);
      $req = $db->query("SELECT * FROM subjects WHERE id = '$sub'");
      $subjectsdetails = $req->fetch();

      return new Subjects($subjectsdetails['id'], $subjectsdetails['department_id'], $subjectsdetails['start_date'],$subjectsdetails['end_date'],$subjectsdetails['name'],$subjectsdetails['faculty_id']);
    }

    public static function insertsubjects($department_id,$start_date,$end_date,$name,$faculty_id) {
      $db = Db::getInstance();
      $department_id = intval($department_id);
      $faculty_id = intval($faculty_id);
      $sql="INSERT INTO subjects (department_id,start_date,end_date,name,faculty_id)
      VALUES ('$department_id', '$start_date', '$end_date','$name','$faculty_id')";
      $db->query($sql);
    }

    public static function updatesubjects($sub,$department_id,$start_date,$end_date,$name,$faculty_id) {
      $db = Db::getInstance();
      $sub = intval($sub);
      $department_id = intval($department_id);
      $faculty_id = intval($faculty_id);
      $sql="UPDATE subjects SET department_id = '$department_id', start_date='$start_date', end_date='$end_date', name = '$name', faculty_id='$faculty_id' 
       WHERE id = '$sub'";
      $db->query($sql);
    }

  	public static function deletesubjects($sub) {
      $db = Db::getInstance();
      $sql="DELETE FROM subjects WHERE id = '$sub'";
	    $db->query($sql);
		}
  }
?>