<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "essabyczki";


// create connection
$conn = mysqli_connect($servername, $username, $password);
//connection check
if (!$conn) {
    die("Conncetion failed". mysqli_connect_error());
}
echo"Connected succesfully";


// $sql = "CREATE DATABASE $database";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully <br>";
// } else {
//     echo "Error creating database". mysqli_error($conn);
// }


if(mysqli_select_db($conn, $database)) {
    echo "Database $database selected <br>";
} else {
    echo "Error select database". mysqli_error($conn);
}


$sql="CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT Primary KEY,
    firstname VARCHAR(20) NOT NULL,
    lastname Varchar(20) NOT NULL,
    email Varchar(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if(mysqli_query($conn, $sql)) {
echo "Table MyGuests created successfully <br>";
} else {
echo"Error creating table". mysqli_error($conn);}
?>
