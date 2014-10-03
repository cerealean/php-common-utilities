<?php


namespace PhpCommonUtilities\Utilities;


class IsEmpty {

    /**
     * @param mixed ... values
     * @return bool
     */
    public static function any(){
        $are_any_empty = false;
        $values = func_get_args();

        foreach($values as $value){
            if(empty($value)){
                $are_any_empty = true;
                break;
            }
        }

        return $are_any_empty;
    }

}
 