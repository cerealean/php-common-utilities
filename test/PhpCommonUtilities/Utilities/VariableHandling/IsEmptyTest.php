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

    public function test_noneShouldReturnTrueIfNoParametersPassed(){
        $actual = IsEmpty::none();

        $this->assertTrue($actual);
    }

    public function test_noneShouldReturnTrueIfVariablePassedIsNotEmpty(){
        $test_var = 12345;

        $actual = IsEmpty::none($test_var);

        $this->assertTrue($actual);
    }

    public function test_noneShouldReturnFalseIfVariablePassedIsEmpty(){
        $test_var = 0;

        $actual = IsEmpty::none($test_var);

        $this->assertFalse($actual);
    }

    public function test_noneShouldReturnFalseIfOneVariablePassedOutOfSeveralIsEmpty(){
        $test_var = null;
        $test_2 = "rawr";
        $test_3 = array(1,2,3,4);

        $actual = IsEmpty::none($test_var, $test_2, $test_3);

        $this->assertFalse($actual);
    }

}
 