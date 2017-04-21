<?php

include("../header.inc.php");

$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);

var_dump($gardena -> sendCommand($mower, $gardena->CMD_MOWER_START_RESUME_SCHEDULE));

?>