<?php namespace levi\Person;

use levi\Person\Parts\Head;
use levi\Person\Parts\LeftArm;
use levi\Person\Parts\LeftLeg;
use levi\Person\Parts\Name;
use levi\Person\Parts\RightArm;
use levi\Person\Parts\RightLeg;
use levi\Person\Parts\Torso;

/**
 * Class NamedPerson
 * @package levi\Person
 */
class NamedPerson extends Person
{
    protected $name;

    /**
     * NamedPerson constructor.
     * @param Head $head
     * @param LeftArm $leftArm
     * @param RightArm $rightArm
     * @param Torso $torso
     * @param LeftLeg $leftLeg
     * @param RightLeg $rightLeg
     * @param Name $name
     */
    public function __construct(
        Head $head,
        LeftArm $leftArm,
        RightArm $rightArm,
        Torso $torso,
        LeftLeg $leftLeg,
        RightLeg $rightLeg,
        Name $name
    )
    {
        $this->head     = $head;
        $this->leftArm  = $leftArm;
        $this->rightArm = $rightArm;
        $this->torso    = $torso;
        $this->leftLeg  = $leftLeg;
        $this->rightLeg = $rightLeg;
        $this->name     = $name;
    }

    public function build()
    {
        $this->head->get();
        $this->leftArm->get();
        $this->rightArm->get();
        $this->torso->get();
        $this->leftLeg->get();
        $this->rightLeg->get();
        $this->name->get();
    }
}
