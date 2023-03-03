<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$con=mysqli_connect($servername,$username,$password,"$dbname");
mysqli_set_charset($con, "utf8");

if(count($_POST)>0) {

    mysqli_query($con,"UPDATE documents set title='" . $_POST['title'] . "', description='" . $_POST['text'] . "', file_name='" . $_POST['file']  . "' WHERE iddocuments='" . $_GET['iddocuments'] . "'");
    $message = "Record Modified Successfully";
    header('Location: /ergasiaEPDmerosB/configDoc.php');
}
$result = mysqli_query($con,"SELECT * FROM documents WHERE iddocuments='" . $_GET['iddocuments'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Επεξεργασία Εγγράφων</title>
    <link rel="stylesheet" href="changeForms.css">
</head>
<body>
<form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
        <button class="buttonBackUp"><a href="configDoc.php">Πίσω</a></button>
    </div>
    <label>Τίτλος:
        <input type="hidden" name="title"  value="<?php echo $row['title']; ?>">
    </label>
    <input type="text" name="title"  class="theme" value="<?php echo $row['title']; ?>">
    <br>
    <label>Περιγραφή:
        <input type="text" name="text" class="date" value="<?php echo $row['description']; ?>">
    </label>
    <br>
    <label>Αρχείο:
        <input type="text" name="file" class="texta" value="<?php echo $row['file_name']; ?>">
    </label>
    <br>
    <input type="submit" name="submit" value="Αποθήκευση" class="buttonF">

</form>
</body>
</html>