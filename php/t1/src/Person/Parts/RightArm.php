<?php namespace levi\Person\Parts;

use levi\Person\Contract\Parts;

class RightArm implements Parts
{
    public function get()
    {
        echo "Right Arm!\n";
    }
}
