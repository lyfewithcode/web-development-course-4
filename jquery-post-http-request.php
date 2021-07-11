<?php
    $name = $_POST['name'];

    if($name != '') {
        echo 'Hello, '.$name;
    } else {
        echo 'Please write your name';
    }
?>