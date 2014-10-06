<?php


namespace PhpCommonUtilities\Test\Utilities\VariableHandling;


use PhpCommonUtilities\Utilities\VariableHandling\IsEmpty;

class IsEmptyTest extends \PHPUnit_Framework_TestCase {

    public function test_anyShouldReturnBoolean(){
        $expected = 'boolean';

        $actual = IsEmpty::any();

        $this->assertInternalType($expected, $actual);
    }

    public function test_anyShouldReturnFalseIfNoParametersPassed(){
        $actual = IsEmpty::any();

        $this->assertFalse($actual);
    }

    public function test_anyShouldReturnFalseIfVariablePassedIsNotEmpty(){
        $test_var = 12345;

        $actual = IsEmpty::any($test_var);

        $this->assertFalse($actual);
    }

    public function test_anyShouldReturnTrueIfVariablePassedIsEmpty(){
        $test_var = 0;

        $actual = IsEmpty::any($test_var);

        $this->assertTrue($actual);
    }

    public function test_noneShouldReturnBoolean(){
        $expected = 'boolean';

        $actual = IsEmpty::none();

        $this->assertInternalType($expected, $actual);
    }

}
 