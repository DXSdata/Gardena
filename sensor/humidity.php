<?php    
include("../header.inc.php");
             
$tries = 3;
$sleeptime = 2;    
    
for ($i = 0; $i < $tries; $i++) //Bugfix: Try again if it was not working the first time
{
    $gardena = new gardena($user, $pw);
    $sensor = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_SENSOR);
    $val = $gardena -> getPropertyData($sensor, $gardena::ABILITY_SOIL_HUMIDITY, $gardena::PROPERTY_SOIL_HUMIDITY) -> value;    
    
    if (@$val == "")
        sleep($sleeptime);
    else
        break;
}
                 
echo $val;  
?>