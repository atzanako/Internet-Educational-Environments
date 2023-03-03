<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$con=mysqli_connect($servername,$username,$password,"$dbname");
mysqli_set_charset($con, "utf8");
$result = mysqli_query($con,"SELECT * FROM documents ORDER BY iddocuments DESC");

$con->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Επεξεργασία Εγγράφων</title>
    <link rel="stylesheet" href="changeForms.css" type="text/css">
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>Τίτλος</th>
            <th>Περιγραφή Μαθήματος</th>
            <th class="lastCell">Αρχείο Μαθήματος</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td class="themeRow"><?php echo $row["title"]; ?></td>
                <td class="descrRow"><?php echo $row["description"]; ?></td>
                <td class="row"><?php echo $row["file_name"]; ?></td>
                <td class="linkUpd"><a href="updateDoc.php?iddocuments=<?php echo $row["iddocuments"]; ?>">Update</a></td>
                <td><a href="deleteDoc.php?iddocuments=<?php echo $row["iddocuments"]; ?>">Delete</a></td>
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
