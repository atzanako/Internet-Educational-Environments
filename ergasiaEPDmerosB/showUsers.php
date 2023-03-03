<?php
$servername = "webpagesdb.it.auth.gr:3306";
$username = "dbuser3471";
$password = "Ylg0#5t9";
$dbname="student3471partB";

$con=mysqli_connect($servername,$username,$password,"$dbname");
mysqli_set_charset($con, "utf8");

$result = mysqli_query($con,"SELECT * FROM users WHERE role='student'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr class="titles">

            <th>Email</th>
            <th>Όνομα</th>
            <th>Επίθετο</th>
            <th class="lastCell">Κωδικός</th>
            <th></th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["idemail"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["lastname"]; ?></td>
                <td class="row"><?php echo $row["password"]; ?></td>
                <td class="linkUpd"><a href="updateUsers.php?email=<?php echo $row["idemail"]; ?>">Update</a></td>
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