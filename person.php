<?php
use levi\Person\Factory\PersonFactory;

require_once("vendor/autoload.php");

// this simplifies the creation of a Person
$person = PersonFactory::create();
$person->build();
