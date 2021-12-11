<?php

use Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility\AddNumbers;
use Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility\DivideNumbers;
use Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility\MultiplyNumbers;
use Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility\Numbers;
use Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility\SubtractNumbers;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    private AddNumbers $addNumbers;
    private DivideNumbers $divideNumbers;
    private MultiplyNumbers $multiplyNumbers;
    private SubtractNumbers $subtractNumbers;

    protected function setUp(): void
    {
        $this->addNumbers = new AddNumbers();
        $this->subtractNumbers = new SubtractNumbers();
        $this->multiplyNumbers = new MultiplyNumbers();
        $this->divideNumbers = new DivideNumbers();

        $this->addNumbers->setNextHandler($this->subtractNumbers);
        $this->subtractNumbers->setNextHandler($this->multiplyNumbers);
        $this->multiplyNumbers->setNextHandler($this->divideNumbers);
        $this->divideNumbers->setNextHandler($this->addNumbers);
    }

    public function testNumbersAreAdded(): void
    {
        $numbers = new Numbers(2, 4, 'Add');

        $this->assertEquals(6, $this->addNumbers->Calculate($numbers));
    }

    public function testNumbersAreSubtracted(): void
    {
        $numbers = new Numbers(4, 3, 'Subtract');

        $this->assertEquals(1, $this->addNumbers->Calculate($numbers));
    }

    public function testNumbersAreMultiplied(): void
    {
        $numbers = new Numbers(4, 3, 'Multiply');

        $this->assertEquals(12, $this->addNumbers->Calculate($numbers));
    }

    public function testNumbersAreDivided(): void
    {
        $numbers = new Numbers(6, 3, 'Divide');

        $this->assertEquals(2, $this->addNumbers->Calculate($numbers));
    }
}
