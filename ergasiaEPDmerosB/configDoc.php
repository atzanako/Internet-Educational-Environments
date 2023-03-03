<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Διαχείριση Εγγράφων Μαθήματος</title>
    <link rel="stylesheet" href="changeForms.css" type="text/css">
</head>
<body>
<h1>Διαχείριση Εγγράφων Μαθήματος</h1>
<button class="buttonBack"><a href="documentsTutor.php">Πίσω</a></button>

<div class="form1">
    <form id="edit" >
        <h2>Επεξεργασία Εγγράφων Μαθήματος</h2>
        <?php
            include "showDoc.php";
        ?>
    </form>
</div>

<div class="form1">
    <form id="add" method="post">
        <h2>Προσθήκη Εγγράφου</h2>
        <label>
            <input name="title" type="text" class="textCon" placeholder="Τίτλος">
            <br>
            <br>
        </label>
        <label>
            <input name="text" type="text" class="textCon" placeholder="Περιγραφή μαθήματος...">
            <br>
            <br>
        </label>
        <label>
            <input name="file" type="text" class="textCon" placeholder="Αρχείο" >
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

    $title = $_POST['title'];
    $text= $_POST['text'];
    $file= $_POST['file'];
    $add = mysqli_query($link,"INSERT INTO documents (title, description, file_name) VALUES ('$title', '$text', '$file')");

    ?>
    <script>
        window.location.href = 'configDoc.php';
    </script>
    <?php
}
?>
</html>
