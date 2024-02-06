<?php
include 'connect.php';

if (isset($_GET['eid'])) {
    $eid = $_GET['eid'];

    $sql = "DELETE FROM crud WHERE id = $eid";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }

}

?>