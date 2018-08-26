<?php
    namespace Human;

    include_once ("../classes/Aliance.php");

    class Human extends \Aliance\Character implements \Aliance\AlianceInterface
    {
        public $color = "";
        public $location = "";

        function __construct($color, $location)
        {
            $this->color = $color;
            $this->location = $location;
        }

    }
