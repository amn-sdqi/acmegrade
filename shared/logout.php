<?php

session_start();
session_destroy();

header("location: login/login.html");

?>
<br>