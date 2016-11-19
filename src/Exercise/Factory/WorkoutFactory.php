<?php namespace levi\Exercise\Factory;

use levi\Exercise\Contracts\ExerciseTools;
use levi\Exercise\Exercise;

class WorkoutFactory
{
    public static function create(ExerciseTools $exerciseTools)
    {
        return new Exercise($exerciseTools);
    }
}
