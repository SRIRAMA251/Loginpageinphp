<?php
session_start();
session_destroy();
header("location:singnmain.php?message=You are logged out!");
?>