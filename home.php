<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <ul>
        <li><a href="http://localhost/crud">HOME</a></li>
        <li><a href="?page=add">TAMBAH BUKU</a></li>
        <li><a href="?page=list">DATA BUKU</a></li>
        <li><a href="?page=guruadd">TAMBAH GURU</a></li>
        <li><a href="?page=gurulist">DATA GURU</a></li>
        <?php
        include 'view.php';
        ?>
    </ul>
</body>
</html>