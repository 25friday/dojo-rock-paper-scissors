<?php

use TwentyFiveFriday\RockPaperScissors;

it('should say it is valid', function () {
    $game = new RockPaperScissors('rock paper');
    $result = $game->play();

    expect($result)->toBe('Player 2 wins: paper beats rock');
});
