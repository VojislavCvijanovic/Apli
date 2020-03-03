<?php

require_once "modules/user/logoutBL.php";


$logoutBL = new LogoutBL();
$logoutBL -> LogoutUser();

?>