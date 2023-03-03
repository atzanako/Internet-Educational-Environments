<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$con=mysqli_connect($servername,$username,$password,"$dbname");
mysqli_set_charset($con, "utf8");

if(count($_POST)>0) {

    mysqli_query($con,"UPDATE announcement set theDate='" . $_POST['date'] . "', theme='" . $_POST['theme'] . "', text='" . $_POST['text']  . "' WHERE idannouncement='" . $_GET['idannouncement'] . "'");
    header('Location: /ergasiaEPDmerosB/configAnnouncement.php');
}
    $result = mysqli_query($con,"SELECT * FROM announcement WHERE idannouncement='" . $_GET['idannouncement'] . "'");
    $row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Επεξεργασία Ανακοινώσεων</title>
    <link rel="stylesheet" href="changeForms.css">
</head>
<body>
<form name="frmUser" method="post" action="">
    <div style="padding-bottom:5px;">
        <button class="buttonBackUp"><a href="configAnnouncement.php">Πίσω</a></button>
    </div>
    <label>Θέμα:
    <input type="hidden" name="theme" value="<?php echo $row['theme']; ?>">
    </label>
    <input type="text" name="theme" class="txttheme"  value="<?php echo $row['theme']; ?>">
    <br>
    <label>Ημερομηνία:
    <input type="date" name="date" class="txtdate" value="<?php echo $row['theDate']; ?>">
    </label>
    <br>
    <label>Κείμενο:
        <input type="text" name="text" class="txttext" value="<?php echo $row['text']; ?>">
    </label>
    <br>
    <input type="submit" name="submit" value="Αποθήκευση" class="buttonF">

</form>
</body>
</html>