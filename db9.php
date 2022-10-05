<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
    <script>
        function Edit(username) {
            var ans = confirm("ต้องการแก้ไขชื่อ " + username);
            if (ans == true)
                document.location = "db9-1.php?username=" + username;
        }
    </script>
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) : ?>
        ชื่อ: <?=$row["name"]?><br>
        ที่อยู่ : <?=$row["address"]?><br>
        เบอร์โทร: <?=$row["mobile"]?><br>
        email: <?=$row["email"]?><br>
        <a href='#' onclick='Edit("<?=$row["username"]?>")'>แก้ไข</a>
        <hr>
    <?php endwhile ?>
</body>

</html>