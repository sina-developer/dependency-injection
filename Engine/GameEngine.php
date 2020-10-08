<?php

namespace Engine;

use Entities\Gamepad;
use Gamepads\XBoxGamepad;
use Gamepads\Ps4Gamepad;

class GameEngine {
    private $gamepad;
    public function setPlatform($platform){
        switch ($platform) {
            case 'xbox':
                $this->gamepad = new Gamepad(new XBoxGamepad());
                break;
            case 'ps4':
                $this->gamepad = new Gamepad(new Ps4Gamepad());
                break;
            default:
                throw new Exception("Platform not set!", 1);
                break;
        }
        $this->gamepad->useController();
    }
}