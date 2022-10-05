<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute();
$row = $stmt->fetch(); 
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="db9-2.php" method="post">
            ชื่อสมาชิก:<input type="text" name="name"><br><br>
            ที่อยู่: <input type="text" name="address"><br><br>
            เบอร์โทร: <input type="tel" name="mobile"><br><br>
            email: <input type="text" name="email" ><br><br>
            <input type="submit" value="แก้ไขชื่อ"><br>
        </form>
    </body>
</html>