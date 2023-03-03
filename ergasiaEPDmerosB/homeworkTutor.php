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
$sql = mysqli_query($link,"SELECT * FROM homework ORDER BY idhomework DESC");
$link->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Εργασίες</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="homework.css">
    <link rel="stylesheet" href="documents.css">
    <link rel="stylesheet" href="triangles.css">
    <link rel="stylesheet" href="changeForms.css">
</head>
<body>

<div class="titleOfPage">
    <h1>Εργασίες</h1>
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
    <button class="ann" ><a href="configHomework.php" ">Διαχείριση Εργασιών</a></button>
    <div class="triangleLeft"></div>
    <div class="triangleDown"></div>
</div>
<ol>
    <?php
        while ($rows=$sql->fetch_assoc()){
    ?>
        <li class="item">
            <h2>Εργασία</h2>
            <p>Οι <strong>στόχοι</strong> της εργασίας είναι:</p>
            <ol class="little-list">
                <?php echo $rows['goals'];?>
            </ol>
            <p class="paragraph"><strong>Εκφώνηση:</strong>  Κατεβάστε την εκφώνηση της εργασίας από
                <a href="<?php echo $rows['file'];?>" download="<?php echo $rows['file'];?>"><strong>εδώ</strong></a>.
            </p>
            <p class="paragraph"><strong>Παραδοτέα:</strong> <?php echo $rows['deliverable'];?></p>
            <p class="paragraph"><strong> Ημερομηνία παράδοσης: </strong> <?php echo $rows['date'];?></p>
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