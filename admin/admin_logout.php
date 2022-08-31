<?php
include_once '../session.php';
session_destroy();
session_unset();
header("location: ../index.php");
?>
