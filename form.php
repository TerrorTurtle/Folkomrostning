<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "folkomdb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO form (name, ort, mail)
VALUES ('$_POST[name]', '$_POST[ort]', '$_POST[mail]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
