<?php include "connect.php" ?>
<html>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) : ?>
        ชื่อ: <?=$row["name"]?><br>
        ที่อยู่ : <?=$row["address"]?><br>
        เบอร์โทร: <?=$row["mobile"]?><br>
        email: <?=$row["email"]?><br>
        <a href='Edit.php?username("<?=$row["username"]?>")'>แก้ไข</a>
        <hr>
    <?php endwhile ?>
</body>

</html>
