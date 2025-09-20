<?php
include("db.php");
include("include/header.php");

if (!isset($_SESSION['loggedUserId'])) {
    header("Location: ../login.php");
    exit();
}

include("include/db_connection.php");
?>
<?php
include("include/db_connection.php");
if (isset($_GET['staff_mang'])){
    include_once "staff_mang.php";
}
elseif (isset($_GET['add_emp'])){
    include_once "add_emp.php";
}
elseif (isset($_GET['emp_history'])){
    include_once "emp_history.php";
}
elseif (isset($_GET['statistics'])){
    include_once "statistics.php";
}
elseif (isset($_GET['complain'])){
    include_once "complain.php";
}
?>
