<?php namespace levi\Person\Factory;

use levi\Person\Parts\Head;
use levi\Person\Parts\LeftArm;
use levi\Person\Parts\LeftLeg;
use levi\Person\Parts\Name;
use levi\Person\Parts\RightArm;
use levi\Person\Parts\RightLeg;
use levi\Person\Parts\Torso;
use levi\Person\NamedPerson;

class NamedPersonFactory
{
    public static function create()
    {
        return new NamedPerson(
            new Head,
            new LeftArm,
            new RightArm,
            new Torso,
            new LeftLeg,
            new RightLeg,
            new Name
        );
    }
}
