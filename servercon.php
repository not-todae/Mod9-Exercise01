<?php
$dbconnect = mysqli_connect("localhost","pdc20user","123","pdc20");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySqli: " . mysqli_connect_error(error);
    die(error);
}
?>