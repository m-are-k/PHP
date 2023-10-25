<?php
$sql = "SELECT id,firstname,lastname FROM MyGuests";
$result= mysqli_query($conn, $sql);
if(mysqli_fetch_row($result)) {
    echo "<ul>";
    while($row = mysqli_fetch_row($result)) {
    echo "<li>".$row[0]." ".$row[1]."".$row[2]."</li>";
    }
    echo"</ul>";
}else{
    echo "0 results";
}
?>