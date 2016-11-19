<?php
include("vendor/autoload.php");

use levi\Exercise\Exercise;
use levi\Exercise\PushUps;
use levi\Exercise\Weights;
use levi\Exercise\Factory\WorkoutFactory;

$weightExercise = new Exercise(new Weights);
$weightExercise->start();

$selfExercise = new Exercise(new PushUps);
$selfExercise->start();

// very simple example of a Factory design pattern
$workoutFactory = WorkoutFactory::create(new Weights);
$workoutFactory->start();