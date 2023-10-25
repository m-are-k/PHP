Połączenie z serwerem MySQL:

<?php
$servername = "localhost";
$username = "root";
$password = "";


// create connection
$conn = mysqli_connect($servername, $username, $password);
//connection check
if (!$conn) {
    die("Conncetion failed". mysqli_connect_error());
}
echo"Connected succesfully";
?>



Do połączania z bazą danych służy funkcja mysqli_connect()
