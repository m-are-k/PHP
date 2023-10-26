
<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "5ina21";


    // create connection
    $conn = mysqli_connect($servername, $username, $password);
    //connection check
    if (!$conn) {
        die("Conncetion failed". mysqli_connect_error());
    }
    echo"Connected succesfully";


    if(mysqli_select_db($conn, $database)) {
        echo "Database $database selected <br>";
    } else {
        echo "Error select database". mysqli_error($conn);
    }


    $vehicle1 = $_POST["vehicle1"];
    $vehicle2 = $_POST["vehicle2"];


    echo"Pierwszy checkbox: ". $_POST["vehicle1"];
    echo"Drugi checkbox: ". $_POST["vehicle2"];


?>
