<?php

include_once ("../classes/Aliance.php");
include_once ("../modela/HumanModel.php");
include_once ("../controllers/mainFunctions.php");

//найтии класс Human

$test = new Human("blue", "Elvin");
$test->getColor();