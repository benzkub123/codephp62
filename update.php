<?php
require_once 'connectdb.php';
$id = "";
$username = "";
$status = "";
// $strSQL = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if (isset($_GET["id"]) && $_GET["id"] != '');
    $id = $_GET["id"];
    $username = $_GET["username"];
    $status = $_GET["status"];
} else {
    //echo "id is null";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $status = "";
    $id = $_GET["id"];
    $username = $_POST["username"];
    $status = $_POST["status"];
    //echo $username . " _ _ " .$status;
        $strSQL = "UPDATE user SET username`='".$username."',status`=".$status." WHERE id=" . $id;
        if (($username == "") && ($status == "")); {
            //echo "ผิดพลาด";

        $result = $myconn->query($strSQL);
        if ($result) {
            echo "success";
        } else {
            echo "error";
        }
    }
}


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
    <form action="update.php?id=<?=$id?>" method="POST">
        <table border="10">
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value="<?= $username ?>"></td>
            </tr>
            <tr>
                <td>status</td>
                <td><input type="text" name="status" value="<?= $status ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form>
</body>

</html>