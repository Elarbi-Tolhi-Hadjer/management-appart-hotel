<?php 
    include './db.php';
    $sql = "SELECT * FROM room_booking";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>