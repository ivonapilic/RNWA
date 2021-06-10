<?php
  class Students  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $roll_num;
    public $first_name;
    public $last_name;
    public $department_id;
    public $phone;
    public $admission_date;
    public $cet_marks;


    public function __construct($roll_num,$first_name,$last_name,$department_id,$phone,$admission_date,$cet_marks) {
      $this->roll_num      = $roll_num;
      $this->first_name      = $first_name;
      $this->last_name      = $last_name;
      $this->department_id      = $department_id;
      $this->phone      = $phone;
      $this->admission_date      = $admission_date;
      $this->cet_marks      = $cet_marks;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM students');
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $stu) {
        $list[] = new Students($stu['roll_num'], $stu['first_name'], $stu['last_name'],$stu['department_id'],$stu['phone'],$stu['admission_date'],$stu['cet_marks']);
      }

      return $list;
    }

    public static function find($stu) {
      $db = Db::getInstance();
      $stu = intval($stu);
      $req = $db->query("SELECT * FROM students WHERE roll_num = '$stu'");
      $studentsdetails = $req->fetch();

      return new Students($studentsdetails['roll_num'], $studentsdetails['first_name'], $studentsdetails['last_name'],$studentsdetails['department_id'],$studentsdetails['phone'],$studentsdetails['admission_date'],$studentsdetails['cet_marks']);
    }

    public static function insertstudents($first_name,$last_name,$department_id,$phone,$admission_date,$cet_marks) {
      $db = Db::getInstance();
      $department_id = intval($department_id);
      $cet_marks = intval($cet_marks);
      $sql="INSERT INTO students (first_name,last_name,department_id,phone,admission_date,cet_marks)
      VALUES ('$first_name', '$last_name', '$department_id','$phone','$admission_date','$cet_marks')";
      $db->query($sql);
    }

    public static function updatestudents($stu,$first_name,$last_name,$department_id,$phone,$admission_date,$cet_marks) {
      $db = Db::getInstance();
      $stu = intval($stu);
      $department_id = intval($department_id);
      $cet_marks = intval($cet_marks);
      $sql="UPDATE students SET first_name = '$first_name', last_name='$last_name', department_id='$department_id', phone = '$phone', admission_date='$admission_date',cet_marks='$cet_marks' 
       WHERE roll_num = '$stu'";
      $db->query($sql);
    }

  	public static function deletestudents($stu) {
      $db = Db::getInstance();
      $sql="DELETE FROM students WHERE roll_num = '$stu'";
	    $db->query($sql);
		}
  }
?>