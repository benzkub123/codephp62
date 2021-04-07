<?php
require_once 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "GET"){
$id = "";
if (isset($_GET["id"]) && $_GET["id"] != '') {
    $IdUser = $_GET["id"];
    $strsql = "DELETE FROM user WHERE  IdUser =" . $IdUser  ;
    $result = $myconn->query($strsql);
    echo $strsql . "<br>";
    echo $result;
   
    if ($result) {
        echo "ลบข้อมูลสำเร็จ";
    } else {
        echo "ไม่สามารถลบข้อมูลได้";
    }
} else {
    echo "ID is Null";
}
}