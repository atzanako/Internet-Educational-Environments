<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$db="student3471partB";


$link = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($link, "utf8");

if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
$sql = mysqli_query($link,"SELECT * FROM documents ORDER BY iddocuments DESC");
$link->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Έγγραφα μαθήματος</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="documents.css">
    <link rel="stylesheet" href="triangles.css">
    <link rel="stylesheet" href="changeForms.css">
</head>
<body>

<div class="titleOfPage">
    <h1>Έγγραφα μαθήματος</h1>
</div>

<div class="menu">
    <div class="menuButtons">
        <button class="button"><a href="arxikiTutor.php">Αρχική σελίδα</a></button>
        <button class="button"><a href="announcementTutor.php">Ανακοινώσεις</a></button>
        <button class="button"><a href="communicationTutor.php">Επικοινωνία</a></button>
        <button class="button"><a href="documentsTutor.php">Έγγραφα μαθήματος</a></button>
        <button class="button"><a href="homeworkTutor.php">Εργασίες</a></button>
        <button class="button"><a href="users.php">Διαχείριση Χρηστών</a></button>
    </div>
</div>

<div class="pageContent">
    <button class="ann"><a href="configDoc.php" style="text-decoration: none;">Διαχείριση Εγγράφων</a></button>
    <div class="triangleLeft"></div>
    <div class="triangleDown"></div>
</div>

    <ol>
        <?php
            while ($rows=$sql->fetch_assoc()){
        ?>
        <li class="item">
            <h2><?php echo $rows['title'];?></h2>
            <p> <?php echo $rows['description'];?><br>
                <a href="<?php echo $rows['file_name'];?>" download="<?php echo $rows['file_name'];?>"><strong>Download</strong></a>
            </p>
        </li>
        <?php
            }
        ?>
    </ol>


<button onclick="topFunction()" id="btn" title="Go to top"><img src="arrow.png" id="arrow" alt="arrow"> </button>

</body>

<script>
    var button = document.getElementById("btn");
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</html>