<?php

include("../header.inc.php");
                 
$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);
        
echo $gardena -> getMowerState($mower);

?>