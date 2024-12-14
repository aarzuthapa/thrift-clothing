<?php

    $connection = mysqli_connect('localhost','root','','onlinemaskusers');
    if(!$connection) {
        die('Database Connection failed'.mysqli_error($connection));
    }

?>