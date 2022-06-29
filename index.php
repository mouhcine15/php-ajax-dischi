<?php

    include __DIR__ . '/list_dischi.php';
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
    <?php
    foreach($dischi as $disco) { ?>
        <div><img src="<?= $disco['poster'] ?>"/></div>
        <div><?= $disco['title'] ?></div>
        <div><?= $disco['author'] ?></div>
        <div><?= $disco['year'] ?></div>
        <?
    } ?>
</body>
</html>


