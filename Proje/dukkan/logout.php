<?php
session_start();
unset($_SESSION["kadi"]);
session_unset();
session_destroy();
header("location:index.php");
?>