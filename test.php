<?php
include("vendor/autoload.php");

use levi\Exercise\Exercise;
use levi\Exercise\PushUps;
use levi\Exercise\Weights;

$weightExercise = new Exercise(new Weights);
$weightExercise->start();

$selfExercise = new Exercise(new PushUps);
$selfExercise->start();