<?php
namespace hetub\skills;

abstract class Skill {
    protected $factor;
    protected $probability;

    public function __construct($factor, $probability)
    {
        $this->factor = $factor;
        $this->probability = $probability;
    }
}