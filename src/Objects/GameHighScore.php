<?php

namespace Telegram\Bot\Objects;

/**
 * Class GameHighScore.
 *
 * @link https://core.telegram.org/bots/api#gamehighscore
 *
 * @property int  $position  Position in high score table for the game.
 * @property User $user      User
 * @property int  $score     Score
 */
class GameHighScore extends AbstractResponseObject
{
    public function relations(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
