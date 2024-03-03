<?php

    $con = mysqli_connect('localhost', 'root', '', '99 speed e-mart');
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

?>