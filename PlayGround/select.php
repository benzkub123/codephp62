<?php
require_once 'connectdb.php';

$strSQL = "SELECT `id`, `username`, `status` FROM `user`";
$result = $myconn->query($strSQL);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="5" width="100%">
        <tr>
            <td> ลำดับ</td>
            <td> ชื่อผู้ใช้</td>
            <td> สถานะ</td>
            <td> แก้ไข</td>
            <td> ลบ</td>
        </tr>
        <?php
        while ($row = $result->fetch_array()) {
            //echo $row["username"] . "<br>";
        ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td>edit</td>
                <td><a href="delete.php?id=<?php echo $row["id"] ?>">delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>