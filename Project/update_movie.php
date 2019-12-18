<?php

require ('connect.php');
$moviename = "Popai";

$sql = "UPDATE movies SET title='" . $moviename . "' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

?>