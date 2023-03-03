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
$sql = mysqli_query($link,"SELECT * FROM announcement ORDER BY theDate DESC");
$link->close();
?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Ανακοινώσεις</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="announcement.css">
    <link rel="stylesheet" href="triangles.css">
    <link rel="stylesheet" href="changeForms.css">
</head>
<body id="top">

<div class="titleOfPage">
    <h1>Ανακοινώσεις</h1>
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
    <button class="ann"><a href="configAnnouncement.php">Διαχείριση Ανακοινώσεων</a></button>
    <div class="triangleLeft" ></div>
    <div class="triangleDown"></div>
</div>

<?php
while ($rows=$sql->fetch_assoc()){
    ?>
    <div class="pageGroup" id="firstAnnouncement">
        <article class="news">
            <header class="newsHeader">
                <time class="newsDate" datetime=<?php echo $rows['theDate'];?>>
                    <span class="newsYear" style="font-size: xx-large; color: #288994; margin-left: -30px; margin-top: 30px"><?php echo $rows['theDate'];?></span>
                </time>
                <h2 class="r-link animated-underline animated-underline_type4 news__link" style="margin-left: 10px;">
                    <?php echo $rows['theme'];?>
                </h2>
            </header>
            <div class="newsContent">
                <p><?php echo $rows['text'];?></p>
            </div>
        </article>
    </div>
    <?php
}
?>
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

