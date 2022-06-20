<?php
    header("Content-type: application/json; charset=UTF-8");

    $content = $_POST['content'];
    $list = array("content" => $content);

    echo json_encode($list);