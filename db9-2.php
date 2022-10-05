<?php include "connect.php" ?>

<?php
$stmt = $pdo->prepare("UPDATE member SET username=?,password=?, name=?, address=?, mobile=?, email=? WHERE username = ?");
$stmt->bindParam(1, $_POST["name"]);
$stmt->bindParam(2, $_POST["address"]);
$stmt->bindParam(3, $_POST["mobile"]);
$stmt->bindParam(4, $_POST["email"]);

if ($stmt->execute())
    echo "แก้ไขชื่อ"  .  $_POST["name"]  .  " สำเร็จ";
?>