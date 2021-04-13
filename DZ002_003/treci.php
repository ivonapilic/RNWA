<?php

    $db = new mysqli("localhost","root","");
    $s = $_REQUEST["s"];
    if($db) {
        $result = $db->select_db("college_database") or die("Doslo je do problema prilikom odabira baze...");
            if (strlen($s)!==0){
            $s = strtolower($s);
                $result2 =$db->query("SELECT * FROM subjects WHERE id LIKE '%$s%' OR start_date LIKE '%$s%' OR end_date LIKE '%$s%' OR name LIKE '%$s%'") or die("Doslo je do problema prilikom izvrsavanja upita...");
            }else{
                $result2 =$db->query("SELECT * FROM subjects WHERE id LIKE '%$s%' OR start_date LIKE '%$s%' OR end_date LIKE '%$s%' OR name LIKE '%$s%'") or die("Doslo je do problema prilikom izvrsavanja upita...");
        }
        $n=$result2->num_rows;
        if ($n > 0){
            echo "<table>
            <tr>
            <th>ID</th>
            <th>Start date</th>
            <th>End date</th>
            <th>Name</th>
            </tr>";
            while($row = mysqli_fetch_array($result2)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['start_date'] . "</td>";
                echo "<td>" . $row['end_date'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "Nema rezultata<br>";
        }
    }
    else {
        echo "<br>Nije proslo spajanje<br>";
    }

mysqli_close($db);