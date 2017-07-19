<?php namespace levi\Exercise;

use levi\Exercise\Contracts\ExerciseTools;

class PushUps implements ExerciseTools
{
    public function execute()
    {
        echo "Doing push ups!\n";
    }
}
