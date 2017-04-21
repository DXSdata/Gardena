<?php

include("../header.inc.php");
                 
$sensor = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_SENSOR);
        
echo $gardena -> getSensorDataFriendly($sensor);

?>