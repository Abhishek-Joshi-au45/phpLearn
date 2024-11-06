<?php

$connect = new mysqli("localhost","root","","voting");
if( ! $connect){
    die(mysqli_error($connect));
}

?>