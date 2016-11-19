<?php namespace levi;

use levi\Contracts\ExerciseTools;

class Exercise
{
    protected $exerciseTool;

    public function __construct(ExerciseTools $exerciseTool)
    {
        $this->exerciseTool = $exerciseTool;
    }

    public function start()
    {
        $this->exerciseTool->execute();
    }
}
