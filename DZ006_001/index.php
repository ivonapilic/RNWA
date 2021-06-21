<?php
$valid_passwords = array ("admin" => "admin");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}

Class dbObj{
	/* Database connection start */
	var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "college_database";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
 
		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}

function get_students($id=0)
{
	global $connection;
	$query="SELECT * FROM students";
	if($id != 0)
	{
		$query.=" WHERE roll_num=".$id." LIMIT 100";
	}
	$response=array();
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
	{
		$response[]=$row;
	}
	print json_encode($response);
}

function insert_students()
	{
		global $connection;

		$data = json_decode(file_get_contents('php://input'), true);
		$roll_num	=$data["roll_num"];
		$first_name		=$data["first_name"];
		$last_name		=$data["last_name"];
		$department_id		=$data["department_id"];
		$phone	=$data["phone"];
		$admission_date		=$data["admission_date"];
        $cet_marks		=$data["cet_marks"];
		echo $query="INSERT INTO students(roll_num, first_name, last_name, department_id, phone, admission_date, cet_marks)VALUES(".$roll_num.",'".$first_name."','".$last_name."','".$department_id."','".$phone."','".$admission_date."','".$cet_marks."')";
		if(mysqli_query($connection, $query))
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Add Successfully.'
			);
		}
		else
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Add Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
function update_students($id)
	{
		global $connection;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$first_name		=$post_vars["first_name"];
		$last_name		=$post_vars["last_name"];
		$phone	=$post_vars["phone"];
						
		$query="UPDATE students SET first_name='".$first_name."', last_name='".$last_name."', phone='".$phone."' WHERE roll_num=".$id;
		
		$result=mysqli_query($connection, $query);
		$broj_redaka = mysqli_affected_rows($connection);;
		
		if($result)
		{
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Update Successfull.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Update Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

function delete_students($id)
{
	global $connection;
	$query="DELETE FROM students WHERE roll_num=".$id;
	if($result = mysqli_query($connection, $query))
	{
		
		$response=array(
			'status' => 1,
			'status_message' =>'Delete Successfull.'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'Delete Failed.'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
}
	
	$db = new dbObj();
	$connection =  $db->getConnstring();
 
	$request_method=$_SERVER["REQUEST_METHOD"];
	switch($request_method)
	{
		case 'GET':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				get_students($id);
			}
			else
			{
				get_students();
			}
			break;
			
			case 'POST':
			insert_students();
			break;	
			
			case 'PUT':
			if (isset($_GET["id"])){
				$id=intval($_GET["id"]);
				update_students($id);				
			}
			else{
				header('Content-Type: application/json');
				echo json_encode("Error while calling method and parametars");
				
			}				
			
			break;				
			case 'DELETE':
			$id=intval($_GET["id"]);
			delete_students($id);
			break;
			
		default:
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}


?>