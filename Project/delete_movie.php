<?php

require ('connect.php');

$sql = "DELETE FROM movies WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    //echo "Error deleting record: " . $conn->error;
}

?>