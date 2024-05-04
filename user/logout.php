<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit(); // Make sure to exit after redirection to prevent further execution

