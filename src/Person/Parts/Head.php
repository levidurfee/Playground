<?php namespace levi\Person\Parts;

use levi\Person\Contract\Parts;

class Head implements Parts
{
    public function get()
    {
        echo "My head!\n";
    }
}
