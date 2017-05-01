<?php

include("../header.inc.php");
                 
$tries = 3;
$sleeptime = 2;    
    
for ($i = 0; $i < $tries; $i++) //Bugfix: Try again if it was not working the first time
{
    $gardena = new gardena($user, $pw);
    $mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);
    $val = $gardena -> getMowerState($mower);

    if (@$val == "")
        sleep($sleeptime);
    else
        break;
}
                 
echo $val;                

?>