<?php

class Register
{

    private $servername = "webpagesdb.it.auth.gr:3306";
    private $username = "dbuser3471";
    private $password = "Ylg0#5t9";
    private $db="student3471partB";


    private $email, $name, $lastName, $pass;

   public function  __construct($email, $name, $lastName, $password)
   {
      $this->email = $email;
      $this->name = $name;
      $this->lastName = $lastName;
      $this->pass = $password;
   }


    function  parseToDatabase($email, $name, $lastname, $password){

       $link = mysqli_connect($this->servername, $this->username, $this->password, $this->db);
        mysqli_set_charset($link, "utf8");

       if (!$link) {
           die('Could not connect: ' . mysqli_connect_error());
       }

       $sql = "INSERT INTO users (idemail, name, lastname, password, role) VALUES ('$email', '$name', '$lastname', '$password', 'student')";

       if (!$link->query($sql)) {
           echo "Error: " . $sql . "<br>" . $link->error;
       }

       $link->close();
   }

    function  compareWithDb($email, $password) {

        $link = mysqli_connect($this->servername, $this->username, $this->password, $this->db);
        mysqli_set_charset($link, "utf8");

        if (!$link) {
            die('Could not connect: ' . mysqli_connect_error());
        }

        $email = stripcslashes($email);
        $password = stripcslashes($password);
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);


        $passToHash = new HashMethod($password);
        $hashedPass = $passToHash->hashFunc($password);


        $result1 = mysqli_query($link, "select * from users where idemail = '$email' and password = '$hashedPass' and role = 'student'")
        or die("Failed to query database" . mysqli_error($link));

        $result2 = mysqli_query($link,"select * from users where idemail = '$email' and password = '$hashedPass' and role = 'tutor'")
        or die("Failed to query database" . mysqli_error($link));

        $row1 = mysqli_fetch_array($result1);
        $row2 = mysqli_fetch_array($result2);

        if($row1['idemail'] == $email && $row1['password'] == $hashedPass && $row1['role'] == 'student'){
            header('Location: /ergasiaEPDmerosB/arxikiStudent.php');
        }elseif ($row2["idemail"] == $email && $row2["password"] == $hashedPass && $row2["role"] == 'tutor'){
            header('Location: /ergasiaEPDmerosB/arxikiTutor.php');
        }else{
            echo "Failed to login";
        }
    }
}
