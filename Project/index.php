<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body>

<div id="forma">
    <form method="GET" action="insert_movie.php">
    Movie Title:<br>
    <input type="text" name="MovieTitle"><br>
    Duration:<br>
    <input type="number" name="duration"><br>
    Year:<br>
    <input type="number" name="year"><br>
    Genre:<br>
    <input type="text" name="genre"><br> <br />
    <input type="submit" value="Submit Movie">
    </form>
</div>

<?php

require ('connect.php');

//    echo "Good to go";

$sql = "SELECT * FROM `movies`";
$result = mysqli_query($conn, $sql);

//print_r ($result);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    echo "<div class='tableblock'>
    <table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Year</th>
        <th>Duration</th>
        <th>Genre</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]."</td><td>" . $row["title"]. "</td><td>" . $row["year"]. "</td><td>" . $row["duration"]. "</td><td>" . $row["genre"]. "</td></tr>" . "<br>";
        
    }
    echo "</table></div>";
} else {
    echo "atuxhses";
}

?>






</body>
</html>