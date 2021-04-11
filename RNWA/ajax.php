<?php

$s = $_REQUEST["s"];
$hint = "";

if ($s !== "") {
    $s = strtolower($s);
    $len=strlen($s);



$db = mysqli_connect("localhost","root","");

if($db) {

$result = mysqli_select_db($db, "college_database") or die("Došlo je do problema prilikom odabira baze...");
$sql="SELECT * FROM faculty WHERE id LIKE '%$s%' OR first_name LIKE '%$s%' OR last_name LIKE '%$s%' OR phone LIKE '%$s%'";
//echo $sql;
$result2 = mysqli_query($db, $sql) or die("Došlo je do problema prilikom izvršavanja upita...");
$n=mysqli_num_rows($result2);
if ($n > 0){
	$hint .= '
		<div class="table-responsive">
		<table class="table table bordered">
			<tr>
			<th>ID</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Phone</th>
			</tr>
		';
	
	while ($myrow=mysqli_fetch_row($result2)){
			//echo $myrow[0]." ".$myrow[1]." ".$myrow[2]."".$myrow[4]."<br>";
			//$hint .= "<div name=\"result\" id=\"".$myrow[0]."\">".$myrow[1].",".$myrow[2].",</div>";
				$hint .= '
				 <tr>
				  <td>'.$myrow["0"].'</td>
				  <td>'.$myrow["1"].'</td>
				  <td>'.$myrow["2"].'</td>
				  <td>'.$myrow["4"].'</td>
				 </tr>
				';
		}
	}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}

	
}

echo $hint === "" ? "no suggestion" : $hint;

?>
