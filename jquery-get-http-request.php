<?php
    $name = $_GET['name'];

    if($name != '') {
        echo 'Hello,s '.$name;
    } else {
        echo 'Please write your name';
    }
?>