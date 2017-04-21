<?php

include("header.inc.php");
                 
$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);
        
//$gardena -> sendCommand($mower, $gardena -> CMD_MOWER_PARK_UNTIL_FURTHER_NOTICE);
//$gardena -> sendCommand($mower, $gardena -> CMD_MOWER_PARK_UNTIL_NEXT_TIMER);
//$gardena -> sendCommand($mower, $gardena -> CMD_MOWER_START_24HOURS);
//echo $mower -> id;
  
//echo $gardena -> getMowerState($mower);

//echo json_encode($mower);

//echo json_encode($mower -> abilities);

echo $gardena -> getConnectionDataFriendly($mower);

echo "<br>state: ".$gardena -> getMowerState($mower);

//var_dump($mower);

//Watering Computer
$watercontrol = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_WATERINGCOMPUTER);
echo $gardena -> getWateringComputerDataFriendly($watercontrol);
$gardena -> sendCommand($watercontrol, $gardena -> CMD_WATERINGCOMPUTER_STOP); 

?>