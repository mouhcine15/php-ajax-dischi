<?php

    include_once __DIR__ . '/list_dischi.php';

    header('content-Type: application/json');

    echo json_encode($dischi);
?>