<?php namespace levi\Person;

use levi\Person\Parts\Head;
use levi\Person\Parts\LeftArm;
use levi\Person\Parts\LeftLeg;
use levi\Person\Parts\RightArm;
use levi\Person\Parts\RightLeg;
use levi\Person\Parts\Torso;

class Person
{
    public $head;
    public $leftArm;
    public $rightArm;
    public $torso;
    public $leftLeg;
    public $rightLeg;

    // this would probably never happen
    // we would also want to type hint their interface and not the
    // concrete class
    public function __construct(
        Head $head,
        LeftArm $leftArm,
        RightArm $rightArm,
        Torso $torso,
        LeftLeg $leftLeg,
        RightLeg $rightLeg
    )
    {
        $this->head = $head;
        $this->leftArm = $leftArm;
        $this->rightArm = $rightArm;
        $this->torso = $torso;
        $this->leftLeg = $leftLeg;
        $this->rightLeg = $rightLeg;
    }

    public function build()
    {
        $this->head->get();
        $this->leftArm->get();
        $this->rightArm->get();
        $this->torso->get();
        $this->leftLeg->get();
        $this->rightLeg->get();
    }
}
