<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Διαχείριση Εργασιών</title>
    <link rel="stylesheet" href="changeForms.css" type="text/css">
</head>
<body>
<h1>Διαχείριση Εργασιών</h1>
<button class="buttonBack"><a href="homeworkTutor.php">Πίσω</a></button>

<div class="form1">
    <form id="edit" >
        <h2>Επεξεργασία Εργασίας</h2>
        <?php
        include "showHomework.php";
        ?>
    </form>
</div>

<div class="form1">
    <form id="add" method="post">
        <h2>Προσθήκη Εργασίας</h2>
        <label>
            <input name="goals" type="text" class="textCon" placeholder="Στόχοι εργασίας...">
            <br>
            <br>
        </label>
        <label>
            <input name="file" type="text" class="textCon" placeholder="Αρχείο">
            <br>
            <br>
        </label>
        <label>
            <input name="text" type="text" class="textCon" placeholder="Παραδοτέο">
            <br>
            <br>
        </label>
        <label>
            <input name="date" type="date" class="textCon" placeholder="Ημερομηνία παράδοσης">
            <br>
            <br>
        </label>
        <input id="add" type="submit" name="add" class="buttonF" value="Προσθήκη">
    </form>
</div>
<br>
</body>

<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$link = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($link, "utf8");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
if(isset($_POST['add'])) {

    $goals = $_POST['goals'];
    $file = $_POST['file'];
    $text= $_POST['text'];
    $date = $_POST['date'];
    $add = mysqli_query($link,"INSERT INTO homework (goals, file, deliverable, date) VALUES ('$goals', '$file', '$text', '$date')");
    $time = date("Y-m-d");
    $addNewAnnouncement = mysqli_query($link,"INSERT INTO announcement (theDate, theme, text) VALUES ('$time', 'Εργασία', 'Η ημερομηνία παράδοσης της εργασίας είναι $date')");

    header('Location: /ergasiaEPDmerosB/configHomework.php');
}

?>

</html>
