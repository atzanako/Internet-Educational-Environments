<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styleSignIn.css">
    <link rel="stylesheet" href="triangles.css">

    <title>Document</title>
</head>
<body>
<h1>Πιστοποίηση</h1>

<div>
    <form action="index.php" method="POST">

        <label>
            <input name="email" type="email" placeholder="email">
            <br>
            <br>
        </label>

        <label>
            <input name="password" type="password" placeholder="Κωδικός">
            <br>
            <br>
        </label>
        <form method="post">
            <input id="signInBtn" type="submit" name="signInBtn" class="button" value="Σύνδεση" />
        </form>


    </form>
</div>


    <?php

    include "Register.php";
    include "HashMethod.php";

    if(isset($_POST['signInBtn'])){
        echo "hi";

        $email = $_POST['email'];
        $password= $_POST['password'];

        $sign = new Register($email, "","",$password);
        $sign->compareWithDb($email, $password);
    }
    ?>

</body>
</html>
