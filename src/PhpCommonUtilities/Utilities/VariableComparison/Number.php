<?php


namespace PhpCommonUtilities\Utilities\VariableComparison;


class Number {

    public function areEqual(){
        $are_equal = true;
        $numbers = func_get_args();
        $numbers_count = count($numbers);

        for($index = 0; $index < $numbers_count; $index++){
            if($numbers[$index] != $numbers[$index + 1]){
                $are_equal = false;
                break;
            }
        }

        return $are_equal;
    }

}
 