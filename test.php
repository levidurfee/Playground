<?php
include("vendor/autoload.php");

use levi\Exercise;
use levi\Weights;

$exercise = new Exercise(new Weights);
$exercise->start();