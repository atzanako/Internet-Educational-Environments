<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Διαχείριση Ανακοινώσεων</title>
    <link rel="stylesheet" href="changeForms.css" type="text/css">
</head>
<body>
<h1>Διαχείριση Ανακοινώσεων</h1>
<button class="buttonBack"><a href="announcementTutor.php">Πίσω</a></button>

<div class="form1">
    <form id="edit" >
        <h2>Επεξεργασία Ανακοίνωσης</h2>
        <?php
            include "showAnnouncement.php";
        ?>
    </form>
</div>

<div class="form1">
    <form id="add" method="post">
        <h2>Προσθήκη Ανακοίνωσης</h2>
        <label>
            <input name="theme" type="text" class="textCon" placeholder="Θέμα">
            <br>
        </label>
        <label>
            <input name="date" type="date" class="textCon" placeholder="Ημερομηνία">
            <br>
        </label>
        <label>
            <input name="text" type="text" class="textCon" placeholder="Κείμενο">
            <br>
        </label>
        <input id="add" type="submit" name="add" class="buttonF" value="Προσθήκη">
    </form>
    <br>
</div>
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

    $theme = $_POST['theme'];
    $date= $_POST['date'];
    $text= $_POST['text'];
    $add = mysqli_query($link,"INSERT INTO announcement (theDate, theme, text) VALUES ('$date', '$theme', '$text')");
    $link->close();

?>
    <script>
        window.location.href = 'configAnnouncement.php';
    </script>
<?php
}
?>


</html>
