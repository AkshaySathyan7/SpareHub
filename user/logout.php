<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location:../login1.html");
exit();

?>