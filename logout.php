<?php
session_start7();
session_destroy();
header("location:singnmain.php?message=you are logout.");
?>