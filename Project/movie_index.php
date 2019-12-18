<?php 

$moviename = $_GET['MovieTitle'];
$year = $_GET['year'];
$duration = $_GET['duration'];
$genre = $_GET['genre'];

echo "Movie Name: " . $moviename ."<br>";
echo "year: " . $year ."<br>";
echo "duration: " . $duration ."<br>";
echo "genre: " . $genre ."<br>";

?>