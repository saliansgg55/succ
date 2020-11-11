<?php

session_start();
unset ($SESSION['u']);
session_destroy();

header('Location: index.php');

?>