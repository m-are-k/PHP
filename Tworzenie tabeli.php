<?php
$sql = "SELECT id,firstname,lastname FROM MyGuests";
$result= mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo"<table>";
    while($row = mysqli_fetch_row($result)) {
        echo "<tr><td>". $row[0] ."<tr><td>". $row[1].
        "<tr><td>".$row[2]. "<tr><td>";
}
}
?>