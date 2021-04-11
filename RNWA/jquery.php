<?php
$connect = mysqli_connect("localhost", "root", "", "college_database");
$output = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM students 
  WHERE roll_num LIKE '%".$search."%'
  OR first_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%' 
  OR phone LIKE '%".$search."%' 
  OR admission_date LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM students ORDER BY roll_num
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Roll Number</th>
     <th>First name</th>
     <th>Last name</th>
     <th>Phone</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["roll_num"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["phone"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
