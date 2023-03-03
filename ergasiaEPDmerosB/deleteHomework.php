<?php

$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$link = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($link, "utf8");

$sql = "DELETE FROM homework WHERE idhomework='" . $_GET["idhomework"] . "'";
if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
    header('Location: /ergasiaEPDmerosB/configHomework.php');
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
mysqli_close($link);
