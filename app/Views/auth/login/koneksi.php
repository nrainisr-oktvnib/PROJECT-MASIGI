<?php
$conn = mysqli_connect("localhost","root", "", "loginn");

if (mysqli_connect_errno()) {
    echo "koneksi database error:". mysqli_connect_errno();
}

?>