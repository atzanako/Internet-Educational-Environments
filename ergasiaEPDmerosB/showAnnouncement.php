<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$con=mysqli_connect($servername,$username,$password,"$dbname");
mysqli_set_charset($con, "utf8");

$result = mysqli_query($con,"SELECT * FROM announcement ORDER BY theDate DESC");

$con->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title> Retrieve data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>Θέμα</th>
            <th>Ημερομηνία</th>
            <th class="lastCell">Κείμενο</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td class="themeRow"><?php echo $row["theme"]; ?></td>
                <td class="themeRow"><?php echo $row["theDate"]; ?></td>
                <td class="row"><?php echo $row["text"]; ?></td>
                <td class="linkUpd"><a href="updateAnnouncement.php?idannouncement=<?php echo $row["idannouncement"]; ?>">Update</a></td>
                <td><a href="deleteAnnouncement.php?idannouncement=<?php echo $row["idannouncement"]; ?>">Delete</a></td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    <?php
}
else
{
    echo "No result found";
}
?>
</body>
</html>
