<?php

include("../header.inc.php");

$gardena = new gardena($user, $pw);

$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);

var_dump($gardena -> sendCommand($mower, $gardena->CMD_MOWER_PARK_UNTIL_FURTHER_NOTICE));

?>