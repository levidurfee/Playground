<?php namespace levi\Person\Parts;

use levi\Person\Contract\Parts;

class LeftArm implements Parts
{
    public function get()
    {
        echo "My Left Arm!\n";
    }
}
