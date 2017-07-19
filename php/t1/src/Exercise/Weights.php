<?php namespace levi\Exercise;

use levi\Exercise\Contracts\ExerciseTools;

class Weights implements ExerciseTools
{
    public function execute()
    {
        echo "Lifting weights\n";
    }
}
