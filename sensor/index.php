<?php

include("../header.inc.php");

$gardena = new gardena($user, $pw);
                 
$sensor = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_SENSOR);
        
echo $gardena -> getSensorDataFriendly($sensor);

?>