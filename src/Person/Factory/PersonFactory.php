<?php namespace levi\Person\Factory;

use levi\Person\Parts\Head;
use levi\Person\Parts\LeftArm;
use levi\Person\Parts\LeftLeg;
use levi\Person\Parts\RightArm;
use levi\Person\Parts\RightLeg;
use levi\Person\Parts\Torso;
use levi\Person\Person;

// our person factory instantiates all of the needed classes
// we would normally use interfaces as the type hints and not
// concrete classes
class PersonFactory
{
    public static function create()
    {
        return new Person(
            new Head,
            new LeftArm,
            new RightArm,
            new Torso,
            new LeftLeg,
            new RightLeg
        );
    }
}
