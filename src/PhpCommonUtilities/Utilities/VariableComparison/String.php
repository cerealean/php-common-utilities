<?php


namespace PhpCommonUtilities\Utilities\VariableComparison;


class String {

    /**
     * @param string... Strings to compare
     * @return bool
     */
    public static function areEqual(){
        $are_equal = true;
        $values = func_get_args();
        $number_of_strings = count($values);

        for($index = 0; $index < $number_of_strings; $index++){
            if(strcmp($values[$index], $values[$index + 1]) !== 0){
                $are_equal = false;
                break;
            }
        }

        return $are_equal;
    }

    /**
     * @param string... Strings to compare
     * @return bool
     */
    public static function areEqualCaseInsensitive(){
        $are_equal = true;
        $values = func_get_args();
        $number_of_strings = count($values);

        for($index = 0; $index < $number_of_strings; $index++){
            if(strcasecmp($values[$index], $values[$index + 1]) !== 0){
                $are_equal = false;
                break;
            }
        }

        return $are_equal;
    }

    /**
     * @param int $length
     * @return bool
     */
    public static function areGreaterLengthThan($length){
        $are_greater_length = true;
        $values = func_get_args();
        $number_of_strings = count($values);

        for($index = 1; $index < $number_of_strings; $index++){
            if(strlen($values[$index]) < $length){
                $are_greater_length = false;
                break;
            }
        }

        return $are_greater_length;
    }

    /**
     * @param int $length
     * @return bool
     */
    public static function areLesserLengthThan($length){
        $are_lesser_length = true;
        $values = func_get_args();
        $number_of_strings = count($values);

        for($index = 1; $index < $number_of_strings; $index++){
            if(strlen($values[$index]) > $length){
                $are_lesser_length = false;
                break;
            }
        }

        return $are_lesser_length;
    }

    /**
     * @param int $length
     * @return bool
     */
    public static function areEqualLengthTo($length){
        $are_equal_length = true;
        $values = func_get_args();
        $number_of_strings = count($values);

        for($index = 1; $index < $number_of_strings; $index++){
            if(strlen($values[$index]) != $length){
                $are_equal_length = false;
                break;
            }
        }

        return $are_equal_length;
    }

}
 