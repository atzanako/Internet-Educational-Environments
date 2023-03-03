<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$con=mysqli_connect($servername,$username,$password,"$dbname");
mysqli_set_charset($con, "utf8");

if(count($_POST)>0) {

    mysqli_query($con,"UPDATE homework set goals='" . $_POST['goals'] . "', file='" . $_POST['file'] . "', deliverable='" . $_POST['text']  . "', date='" . $_POST['date']  . "' WHERE idhomework='" . $_GET['idhomework'] . "'");
    $message = "Record Modified Successfully";
    header('Location: /ergasiaEPDmerosB/configHomework.php');
}
$result = mysqli_query($con,"SELECT * FROM homework WHERE idhomework='" . $_GET['idhomework'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Επεξεργασία Εργασιών</title>
    <link rel="stylesheet" href="changeForms.css">
</head>
<body>
<form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
        <button class="buttonBackUp"><a href="configHomework.php">Πίσω</a></button>
    </div>
    <label>Στόχοι:
        <input type="hidden" name="goals" value="<?php echo $row['goals']; ?>">
    </label>
    <input type="text" name="goals" class="goals" value="<?php echo $row['goals']; ?>">
    <br>
    <label>Αρχείο:
        <input type="text" name="file" class="file" value="<?php echo $row['file']; ?>">
    </label>
    <br>
    <label>Παραδοτέα:
        <input type="text" name="text" class="text" value="<?php echo $row['deliverable']; ?>">
    </label>
    <br>
    <label>Ημερομηνία Παράδοσης:
        <input type="date" name="date" class="textd" value="<?php echo $row['date']; ?>">
    </label>
    <br>
    <input type="submit" name="submit" value="Αποθήκευση" class="buttonF">

</form>
</body>
</html>