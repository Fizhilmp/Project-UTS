<?php
include('../controller/config.php');
$google_client->revokeToken();
session_destroy();
header('location:../view/login.php');
 ?>