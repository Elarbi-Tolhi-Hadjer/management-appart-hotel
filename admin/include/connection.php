<?php
$connection = mysqli_connect("localhost", "root", "", "hotel");

if (!$connection) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}
?>
<?php

