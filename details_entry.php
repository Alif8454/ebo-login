<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "latihan-1";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql_query = "INSERT INTO entry_details (email, password, gender) VALUES ('$email', '$password', '$gender')";

    if (mysqli_query($conn, $sql_query)) {
        echo "New Details Entry inserted successfully!";
    } else {
        echo "Error: " . $sql_query . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>