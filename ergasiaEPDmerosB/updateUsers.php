<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$con=mysqli_connect($servername,$username,$password,"$dbname");
mysqli_set_charset($con, "utf8");
if(count($_POST)>0) {

    include "HashMethod.php";

    $hash = new HashMethod($_POST['uPass']);
    $pass = $hash->hashFunc($_POST['uPass']);


    mysqli_query($con,"UPDATE users set  name='" . $_POST['first_name'] . "', lastname='" . $_POST['last_name'] . "', password='" . "$pass" . "' WHERE idemail='" . $_POST['userid'] . "'");
    header('Location: /ergasiaEPDmerosB/users.php');
}
$result = mysqli_query($con,"SELECT * FROM users WHERE idemail='" . $_GET['email'] . "'");
$row= mysqli_fetch_array($result);



?>
<html>
<head>
    <link rel="stylesheet" href="changeForms.css">
    <title>Επεξεργασία Χρηστών</title>
</head>
<body>
<form name="frmUser" method="post" action="">
    <div style="padding-bottom:5px;">
        <button class="buttonBackUp"><a href="users.php">Πίσω</a></button>
    </div>

    <input type="hidden" name="userid" class="txt" value="<?php echo $row['idemail']; ?>">
    <label>Email:
        <input type="text" name="userid"  class="txtEmail" value="<?php echo $row['idemail']; ?>">
    </label>
    <br>

    <label>Όνομα:
        <input type="text" name="first_name" class="txtName" value="<?php echo $row['name']; ?>">
    </label>
    <br>

    <label>Επίθετο:
        <input type="text" name="last_name" class="txt" value="<?php echo $row['lastname']; ?>">
    </label>
    <br>

    <label>Κωδικός Πρόσβασης:
        <input type="text" name="uPass" class="password" value="<?php echo $row['password']; ?>">
    </label>
    <br>
    <br>
    <input type="submit" name="submit" value="Αποθήκευση" class="buttonFUp">

</form>
</body>
</html>