<?php namespace levi\Person\Factory;

use levi\Person\NamedPerson;
use levi\Person\Parts\Head;
use levi\Person\Parts\LeftArm;
use levi\Person\Parts\LeftLeg;
use levi\Person\Parts\Name;
use levi\Person\Parts\RightArm;
use levi\Person\Parts\RightLeg;
use levi\Person\Parts\Torso;

/**
 * Class NamedPersonFactory
 * @package levi\Person\Factory
 */
class NamedPersonFactory
{
    /**
     * @return NamedPerson
     */
    public static function create(): NamedPerson
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
