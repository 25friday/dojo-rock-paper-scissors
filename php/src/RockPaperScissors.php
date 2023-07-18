<?php

namespace TwentyFiveFriday;

use Exception;

class RockPaperScissors
{
    public function __construct(private string $input) {}
    
    public function play(): string {
        throw new Exception('Not implemented');
    }
}
