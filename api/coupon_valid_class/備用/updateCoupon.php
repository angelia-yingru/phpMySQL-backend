<?php
require($_SERVER['DOCUMENT_ROOT'] . "/project-conn.php");

$id=$_POST["id"];
$coupon=$_POST["coupon"];
$class=$_POST["class"];
$valid=$_POST["valid"];
// echo $name;

$sql="UPDATE coupon_valid_class SET coupon='$coupon', class='$class', valid='$valid' WHERE id='$id'";

// echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "更新成功";
    header("location: form_coupon.php?id=".$id);
    $conn->close();
} else {
    echo "更新資料錯誤: " . $conn->error;
    exit;
}




?>