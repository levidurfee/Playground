<?php namespace levi\Person\Parts;

use levi\Person\Contract\Parts;

class Name implements Parts
{
    public function get()
    {
        echo "I have a name!\n";
    }
}