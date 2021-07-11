<?php
    if(ISSET($_POST['name'])) {
        if($_POST['name'] != "") {
            $name = $_POST['name'];
            echo 'Hello, <b><i>'.$name.'</i></b>';
        } else {
            echo 'Please write your name';
        }
    }
?>


<?php
// if(ISSET($_GET['name'])) {
//     if($_GET['name'] != "") {
//         $name = $_GET['name'];
//         echo 'Hello, <b><i>'.$name.'</i></b>';
//     } else {
//         echo 'Please write your name';
//     }
// }
?>
