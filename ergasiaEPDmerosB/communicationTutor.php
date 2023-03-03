<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Επικοινωνία</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="communication.css">
</head>
<body>

<div class="titleOfPage">
    <h1>Επικοινωνία</h1>
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
    <h2 id="webForm">Αποστολή email μέσω της web φόρμας</h2>
    <img src="mailDesk.png" alt="contact us image">
    <div class="communicationForm">
        <form action="sendMail.php" method="post">
            <div class="name">
                <input name="name" placeholder="Ονοματεπώνυμο">
            </div>
            <div class="email">
                <input name="email" placeholder="E-Mail">
            </div>
            <div class="theme">
                <input name="theme" placeholder="Θέμα">
            </div>
            <div class="text">
                <textarea name="message" class="message" placeholder="Γράψε το μήνυμά σου..."></textarea>
            </div>

<!--            <input id="sendBtn" type="submit" name="sendBtn"-->
<!--                   class="sendBtn" value="Αποστολή" />-->
        </form>
          <button name="sendBtn" class="sendBtn">Αποστολή</button>
    </div>
    <h2 id="sendEmail">Αποστολή email με χρήση email διεύθυνσης</h2>
    <p>Εναλλακτικά μπορείτε να αποστείλετε e-mail στην παρακάτω<br> διεύθυνση ηλεκτρονικού ταχυδρομείου:<br>
        <a href="mailto:atzanako@csd.auth.gr">atzanako@csd.auth.gr</a>
    </p>
</div>

</body>
</html>