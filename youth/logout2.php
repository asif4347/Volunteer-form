<?php
session_start();
session_unset();
header("Location: web/index.php");
?>