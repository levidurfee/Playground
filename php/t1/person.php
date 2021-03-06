<?php

use levi\Person\Factory\NamedPersonFactory;
use levi\Person\Factory\PersonFactory;
use levi\Person\Parts\Head;
use levi\Person\Parts\LeftArm;
use levi\Person\Parts\LeftLeg;
use levi\Person\Parts\RightArm;
use levi\Person\Parts\RightLeg;
use levi\Person\Parts\Torso;
use levi\Person\Person;

require_once("vendor/autoload.php");

// Long versions

/*
 * Very Verbose Person example
 */
$head       = new Head;
$leftArm    = new LeftArm;
$rightArm   = new RightArm;
$torso      = new Torso;
$leftLeg    = new LeftLeg;
$rightLeg   = new RightLeg;

$veryVerbosePerson = new Person(
    $head,
    $leftArm,
    $rightArm,
    $torso,
    $leftLeg,
    $rightLeg
);

$veryVerbosePerson->build();

echo "--<br>";

/*
 * Verbose Person example
 */

$verbosePerson = new Person(
    new Head,
    new LeftArm,
    new RightArm,
    new Torso,
    new LeftLeg,
    new RightLeg
);

$verbosePerson->build();

echo "--<br>";

// this simplifies the creation of a Person
$person = PersonFactory::create();
$person->build();

echo "--<br>";

// we could also extend the Person class and create a new Factory without
// modifying the Person class. Lets give the Person a name.
$namedPerson = NamedPersonFactory::create();
$namedPerson->build(); // we overrode the build method to also output the name
echo "--<br>";
$namedPerson->sleep(); // we can still call the same methods that Person has
