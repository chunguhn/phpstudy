<?php
    // response JSON
    $res_data = [
        'a' => 'i',
        'b' => '2',
        'c' => 'ㅇㅇ'
    ];

    header('Content-Type:application/json; charset=utf-8');

    die(json_encode($res_data));
?>
