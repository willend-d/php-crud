<?php
$connection = mysqli_connect("localhost","root","","keuangan");
//check connection
if (mysqli_connect_errno()){
    echo "failed connection database:" . mysqli_connect_error();
} else {
    echo "ALHAMDULLILAH SUKSESS";
}
?>