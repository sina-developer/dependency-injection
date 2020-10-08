<?php

namespace Interfaces\Injectors;
use Interfaces\IGamepad;

interface IGamepadInjector{
    function InjectFunctionality(IGamepad $iGamepad);
}