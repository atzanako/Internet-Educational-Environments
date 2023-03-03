<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Διαχείριση Χρηστών</title>
    <link rel="stylesheet" href="changeForms.css" type="text/css">
</head>
<body>
    <h1>Διαχείριση Χρηστών</h1>
    <button class="buttonBack"><a href="arxikiTutor.php">Πίσω</a></button>

    <div class="form1">
        <form id="editUsers" >
            <h2>Επεξεργασία Χρήστη</h2>
            <?php
                include "showUsers.php";
            ?>
            <br>
            <br>
        </form>
    </div>

    <div class="form1">
        <form id="delete" method="post">
            <h2>Διαγραφή Χρήστη</h2>
            <input class="usersInput" name="email" type="email" placeholder="Email χρήστη">
            <br>
            <input name="delete" type="submit" value="Διαγραφή" class="buttonUser">
        </form>
    </div>


    <div class="formAdd">
        <form id="add" method="post">
            <h2>Προσθήκη Χρήστη</h2>
            <label>
                <input class="usersInput"  name="email" type="email" placeholder="Email">
                <br>
                <br>
            </label>
            <label>
                <input class="usersInput"  name="name" type="text" placeholder="Όνομα">
                <br>
                <br>
            </label>
            <label>
                <input  class="usersInput" name="lastname" type="text" placeholder="Επίθετο">
                <br>
                <br>
            </label>
            <label>
                <input class="usersInput" name="password" type="password" placeholder="Κωδικός πρόσβασης">
                <br>
                <br>
            </label>
            <input id="btnSub" type="submit" name="add" class="buttonUser" value="Προσθήκη">
        </form>
        <br>
    </div>
</body>

<?php
    if(isset($_POST['add'])) {

        include "Register.php";
        include "HashMethod.php";

        $email = $_POST['email'];
        $name= $_POST['name'];
        $lastname= $_POST['lastname'];
        $password= $_POST['password'];

        $hash = new HashMethod($password);
        $password= $hash->hashFunc($password);

        $reg= new Register($email, $name, $lastname, $password);
        $reg->parseToDatabase($email, $name, $lastname, $password);

        header('Location: /ergasiaEPDmerosB/users.php');
    }

    if(isset($_POST['delete'])){
        $servername = "webpagesdb.it.auth.gr:3306";
        $username = "dbuser3471";
        $password = "Ylg0#5t9";
        $dbname="student3471partB";

        $link=mysqli_connect($servername,$username,$password,"$dbname");
        mysqli_set_charset($link, "utf8");


        if (!$link) {
            die('Could not connect: ' . mysqli_connect_error());
        }

        $email = $_POST['email'];
        $del = mysqli_query($link,"DELETE FROM users WHERE idemail= '$email'");

        header('Location: /ergasiaEPDmerosB/users.php');
    }
?>

</html>
