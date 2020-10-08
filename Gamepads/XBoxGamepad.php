<?php

namespace Gamepads;

use Interfaces\IGamepad;

class XBoxGamepad implements IGamepad{
    private $gamepad_name = "XBOX Controller";
    private $vibration_power = 1.0;

    function GetGamepadName() {
        return $this->gamepad_name;
    }

    function SetVibrationPower($power){
        $this->vibration_power = $power;
    }
}