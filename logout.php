<?php
session_destroy();
$_SESSION['userSession'] = false;
header('Location: index.html');
?>