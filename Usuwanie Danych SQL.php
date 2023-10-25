<?php
$sql = "SELECT id,firstname,lastname FROM MyGuests";
$result= mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: ".$row[0]."- Name:".$row[1]." ".$row[2]."<br>";
    }
} else {echo "0 resalts";}
?>