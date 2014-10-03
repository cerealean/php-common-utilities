<?php


namespace PhpCommonUtilities\Utilities\VariableHandling;


interface VariableHandling {

    /**
     * @param mixed ... values
     * @return bool
     */
    public static function any();

    /**
     * @param mixed ... values
     * @return bool
     */
    public static function none();

    /**
     * @param mixed ... values
     * @return bool
     */
    public static function all();

    /**
     * @param mixed ... value
     * @return bool
     */
    public static function value($value);

} 