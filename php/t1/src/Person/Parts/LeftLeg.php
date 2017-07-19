<?php namespace levi\Person\Parts;

use levi\Person\Contract\Parts;

class LeftLeg implements Parts
{
    public function get()
    {
        echo "Left Leg!\n";
    }
}
