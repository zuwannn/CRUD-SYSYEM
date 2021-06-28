<?php

/* connect to MySQL database */
$con = mysqli_connect('localhost', 'root', '', 'crudsystem');

// check connection
if (mysqli_connect_errno()){
    die("error: could not connect".$mysqli_connect_error());
}
?>