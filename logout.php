<?php
session_start();
session_destroy();
header('Location: ./ecotun.php');
?>