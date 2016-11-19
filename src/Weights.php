<?php namespace levi;

use levi\Contracts\ExerciseTools;

class Weights implements ExerciseTools
{
    public function execute()
    {
        echo "Lifting weights";
    }
}
