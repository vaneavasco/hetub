<?php

namespace VaneaVasco\Hetub\Skills;

use VaneaVasco\Hetub\Display\Message as Message;

class MagicShield extends DefensiveSkill
{

    public function enhanceDefence($damage)
    {
        if (rand(1, 100) <= $this->probability) {
            $damage *= $this->factor;
            Message::display('Magic Shield skill is used!');
        }

        return $damage;
    }
}
