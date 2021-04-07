<?php
include 'template/header.html';
require_once 'connectdb.php';
$id_user = "";
$username = "";
$status = "";
$strSQL = "";
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if(isset($_GET["id"]) && $_GET["id"] != '') {
        $id_user = $_GET["id"];
        $username = $_GET["username"];
        $status = $_GET["status"];
    }else {
        //echo "id is null";
    }
}
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $status = "";
    $id_user = $_GET["id"];
    $username = $_POST["username"];
    $status = $_POST["status"];
    echo $username . " -- " .$status;
    $strSQL ="UPDATE user SET username='" .$username."',status=".$status." WHERE id=".$id_user;
    if(($username == "") && ($status == "")) {
        echo "ไม่สามารถเพิ่มข้อมูลได้";
    }else{
        echo $strSQL ;

        $result = $myconn->query($strSQL);
        if($result){
            echo "เพิ่มข้อมูลสำเร็จ";
        }else{
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }
    }
    //echo $_POST["username"];



    //$strSQL ="INSERT INTO user`(username`, password_hash) ";
    //$strSQL .=" VALUES ('user03','password for user 03')";

    //$result = $myconn->query($strSQL);
    //if($result){
    //    echo "1";
    //}else{
    //    echo "2";
    //}
    ?>
    
    <!-- <body>
    <form action="update.php?id=<?=$id_user?>" method="POST">
        <table border="2">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?=$username?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="<?=$status?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form> -->

    <form action="update.php?id=<?=$id_user?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?=$username?>">
    <small id="emailHelp" class="form-text text-muted">เเขบ.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">status</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="status" value="<?=$status?>">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary">บันทึก</button>
</form>
    </body>
    </html>
