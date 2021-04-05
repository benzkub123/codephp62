<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'codephp62';

$myconn = new mysqli ($dbhost, $dbuser, $dbpass, $dbname);                  
if ($myconn->connect_errno){
    printf("Connect failed: %s\n",$myconn->connect_error);
    exit();
}

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
        <table border="1" width="100%">  
        <tr>
            <td>ลำดับ</td>
            <td>ชื่อผู้ใช้</td>
            <td>สถานะ</td>
        </tr>
        <?php
        while($row = $result->fetch_array()) {
    ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["username"];?></td>
            <td><?php echo $row["status"];?></td>
        </tr>
       <?php
        }
    ?>
    </table>
</body>
</html>