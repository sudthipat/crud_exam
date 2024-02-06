<?php

$con = new mysqli('localhost', 'root', '', 'crud_exam');

if (!$con) {
    die(mysqli_error($con));
}
?>