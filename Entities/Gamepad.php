<?php

namespace Entities;

use Interfaces\Injectors\IGamepadInjector;
use Interfaces\IGamepad;

class Gamepad implements IGamepadInjector{
    private $iGamepad;

    // constructor injection
    public function __construct(IGamepad $iGamepad = null){
        $this->iGamepad = $iGamepad;
    }
    // setter injection
    public function setIGamepad(IGamepad $iGamepad){
        $this->iGamepad = $iGamepad;
    }
    // interface injection
    public function InjectFunctionality(IGamepad $iGamepad){
        $this->iGamepad = $iGamepad;
    }

    public function useController(){
        echo "Using " . $this->iGamepad->GetGamepadName() . "\n";
    }
}