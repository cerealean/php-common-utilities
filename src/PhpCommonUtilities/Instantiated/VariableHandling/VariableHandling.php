<?php


namespace PhpCommonUtilities\Instantiated\VariableHandling;

/**
 * Class VariableHandling
 *
 * @package PhpCommonUtilities\Instantiated\VariableHandling
 */
abstract class VariableHandling {

    /**
     * @param mixed ... values
     * @return bool
     */
    abstract public function any();

    /**
     * @param mixed ... values
     * @return bool
     */
    abstract public function none();

    /**
     * @param mixed ... values
     * @return bool
     */
    abstract public function all();

    /**
     * @param mixed ... value
     * @return bool
     */
    abstract public function value($value);

    /**
     * @return string
     */
    protected function fetchStaticClassName(){
        $current_class = get_class($this);
        $static_class = str_replace("Instantiated\\", "", $current_class); //Remove Instantiated\ from the class name

        return $static_class;
    }

} 