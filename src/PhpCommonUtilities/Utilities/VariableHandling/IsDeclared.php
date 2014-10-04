<?php


namespace PhpCommonUtilities\Utilities\VariableHandling;


class IsDeclared implements VariableHandling {
    /**
     * Returns true if any of the given values are set. Otherwise returns false.
     *
     * @param mixed ... values
     * @return bool
     */
    public static function any(){
        $are_any = false;
        $values = func_get_args();

        foreach($values as $value){
            if(isset($value)){
                $are_any = true;
                break;
            }
        }

        return $are_any;
    }

    /**
     * Returns true if none of the given values are set. Otherwise returns false.
     *
     * @param mixed... values
     * @return bool
     */
    public static function none(){
        return !call_user_func_array("any", func_get_args());
    }

    /**
     * Returns true if all of the given values are set. Otherwise returns false.
     *
     * @return bool
     */
    public static function all(){
        $are_all = true;
        $values = func_get_args();

        foreach($values as $value){
            if(!isset($value)){
                $are_all = false;
                break;
            }
        }

        return $are_all;
    }

    /**
     * Returns true if the given value is set. Otherwise returns false. Simple OOP wrapper for the PHP native empty function.
     *
     * @param mixed $value
     * @return bool
     */
    public static function value($value){
        return isset($value);
    }
}
 