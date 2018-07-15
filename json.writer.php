<?php
    $json = file_get_contents('php://input');
    $obj = json_decode($json, false, 512, JSON_UNESCAPED_UNICODE);
    $fp = fopen('com.priceyapps.bangla_birbal_stories', 'w');
    fwrite($fp, json_encode($obj, JSON_UNESCAPED_UNICODE));
    fclose($fp);
?>