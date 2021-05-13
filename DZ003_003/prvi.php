<?php 
$s = $_REQUEST["id"];
$db = mysqli_connect("localhost", "root", "", "college_database");
if($db){

	$sql = "select id, name from subjects where id = $s";
	$response = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));	
	
	$n=mysqli_num_rows($response);
	if ($n > 0){
	
		echo '
                <div class="table-responsive">
                <table class="table table bordered">
                <tr>
                <th>ID</th>
                <th>Kolegij</th>
                </tr>
		    ';
	while ($myrow=mysqli_fetch_row($response)){
		 
		echo '
                <tr>
                <td>'.$myrow["0"].'</td>
                <td>'.$myrow["1"].'</td>
                </tr>
            ';
			

		}
                
	}
        else {
                echo 'Nema rezultata. ';
        }
}
else {
	echo "<br>Nije proslo spajanje<br>";
	}


?>