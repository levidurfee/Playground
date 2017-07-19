<?php namespace levi\Person\Parts;

use levi\Person\Contract\Parts;

class RightLeg implements Parts
{
    public function get()
    {
        echo "Right left!\n";
    }
}
