<?php
include 'connection.php';

$username = $_GET['username'];

$sql = "DELETE FROM users WHERE _sername='$username'";

if (mysqli_query($conn, $sql)) {
    header("Location: ../admin/management.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}