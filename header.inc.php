<?php
error_reporting(E_ALL);

include("data.inc.php");
include("functions.inc.php");
include("gardena.class.inc.php");

$gardena = new gardena($user, $pw);
             
?>