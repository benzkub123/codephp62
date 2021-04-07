<?php
include 'template/header.html';
require_once 'connectdb.php';
$IdUser = "";
$UserName = "";
$Status = ""; 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if (isset($_GET["id"]) && $_GET["id"] != '') {
        $IdUser = $_GET["id"]; 
        $UserName = $_GET["UserName"];
        $Status = $_GET["Status"];
    } else {
        echo "ID is Null";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $Status = " ";
    $IdUser = $_POST["Id"];
    $UserName = $_POST["UserName"];
    $Status = $_POST["Status"];
    // echo $UserName . " -- "  .$Status;
     $strsql = "UPDATE user SET UserName`='" .$UserName ."',Status`=" .$Status ." WHERE IdUser =" . $IdUser;
        if (($UserName == "")&& ($Status == "")) {
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }else{
            echo $strsql;
            $result = $myconn->query($strsql);
        if ($result) {
            echo "เพิ่มข้อมูลสำเร็จ";
        } else {
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    
    }
}

?>


<body>
    <form action="update.php?Id=<?=$IdUser?>" method="POST">
        <table border="10">

            <tr>
                <td>UserName</td>
                <td><input type="text" name="UserName" value="<?= $UserName ?> "></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="Status" value="<?= $Status ?> "></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>

        </table>

    </form>
    
    <?php
        include 'template/Footer.html';
        ?>
</body>

</html>