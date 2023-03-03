<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$con=mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($con, "utf8");



$result = mysqli_query($con,"SELECT * FROM homework ORDER BY idhomework DESC");

$con->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Επεξεργασία Εργασιών</title>
    <link rel="stylesheet" href="changeForms.css" type="text/css">
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>Στόχοι</th>
            <th>Αρχείο Εργασίας</th>
            <th class="lastCell">Παραδοτέο</th>
            <th>Ημερομηνία</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td class="goalsRow"><?php echo $row["goals"]; ?></td>
                <td class="fileRow"><?php echo $row["file"]; ?></td>
                <td class="row"><?php echo $row["deliverable"]; ?></td>
                <td class="row"><?php echo $row["date"]; ?></td>
                <td class="linkUpd"><a href="updateHomework.php?idhomework=<?php echo $row["idhomework"]; ?>">Update</a></td>
                <td><a href="deleteHomework.php?idhomework=<?php echo $row["idhomework"]; ?>">Delete</a></td>
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
