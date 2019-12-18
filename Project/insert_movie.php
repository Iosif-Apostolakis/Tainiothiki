<?php
require ('connect.php');

$moviename = $_GET['MovieTitle'];
$year = $_GET['year'];
$duration = $_GET['duration'];
$genre = $_GET['genre'];

$sql = "INSERT INTO movies (title, genre, year, duration)
VALUES ('" . $moviename . "', '" . $genre . "', '" . $year . "', '" . $duration . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>