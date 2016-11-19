<?php namespace levi\Person;

use levi\Person\Parts\Head;
use levi\Person\Parts\LeftArm;
use levi\Person\Parts\LeftLeg;
use levi\Person\Parts\RightArm;
use levi\Person\Parts\RightLeg;
use levi\Person\Parts\Torso;

/**
 * Class Person
 * @package levi\Person
 */
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
    /**
     * Person constructor.
     * @param Head $head
     * @param LeftArm $leftArm
     * @param RightArm $rightArm
     * @param Torso $torso
     * @param LeftLeg $leftLeg
     * @param RightLeg $rightLeg
     */
    public function __construct(
        Head $head,
        LeftArm $leftArm,
        RightArm $rightArm,
        Torso $torso,
        LeftLeg $leftLeg,
        RightLeg $rightLeg
    )
    {
        $this->head     = $head;
        $this->leftArm  = $leftArm;
        $this->rightArm = $rightArm;
        $this->torso    = $torso;
        $this->leftLeg  = $leftLeg;
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

    public function sleep()
    {
        echo "The person is sleeping.\n";
    }
}
