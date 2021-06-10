<?php
  class Faculty  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $first_name;
    public $last_name;
    public $department_id;
    public $phone;


    public function __construct($id,$first_name, $last_name, $department_id, $phone) {
      $this->id      = $id;
      $this->first_name     = $first_name;
      $this->last_name      = $last_name;
      $this->department_id      = $department_id;
      $this->phone      = $phone;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM faculty');
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $fa) {
        $list[] = new Faculty($fa['id'], $fa['first_name'], $fa['last_name'], $fa['department_id'], $fa['phone']);
      }

      return $list;
    }

    public static function find($fa) {
      $db = Db::getInstance();
      $fa = intval($fa);
      $req = $db->query("SELECT * FROM faculty WHERE id = '$fa'");
      $facultydetails = $req->fetch();

      return new Faculty($facultydetails['id'],$facultydetails['first_name'], $facultydetails['last_name'], $facultydetails['department_id'], $facultydetails['phone']);
    }

    public static function insertfaculty($first_name,$last_name,$department_id,$phone) {
      $db = Db::getInstance();
      $department_id = intval($department_id);
      $sql="INSERT INTO faculty (first_name, last_name, department_id, phone)
      VALUES ('$first_name', '$last_name', '$department_id', '$phone')";
      $db->query($sql);
    }

    public static function updatefaculty($fa,$first_name,$last_name,$department_id,$phone) {
      $db = Db::getInstance();
      $fa = intval($fa);
      $department_id = intval($department_id);
      $sql="UPDATE faculty SET first_name = '$first_name', last_name='$last_name', department_id = '$department_id', phone='$phone'
       WHERE id = '$fa'";
      $db->query($sql);
    }

  	public static function deletefaculty($fa) {
      $db = Db::getInstance();
      $sql="DELETE FROM faculty WHERE id = '$fa'";
	    $db->query($sql);
		}
  }
?>