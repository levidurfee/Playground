<?php namespace levi\Person\Parts;

use levi\Person\Contract\Parts;

class Torso implements Parts
{
    public function get()
    {
        echo "My Torso!\n";
    }
}
