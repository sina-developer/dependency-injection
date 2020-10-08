<?php

namespace Gamepads;

use Interfaces\IGamepad;

class Ps4Gamepad implements IGamepad{
    private $gamepad_name = "PS4 Controller";
    private $vibration_power = 2.0;
    
    function GetGamepadName() {
        return $this->gamepad_name;
    }

    function SetVibrationPower($power){
        $this->vibration_power = $power;
    }
}