<?php


namespace PhpCommonUtilities\Instantiated\VariableHandling;

/**
 * Class IsBool
 *
 * @package PhpCommonUtilities\Instantiated\VariableHandling
 */
class IsBool extends VariableHandling {
    /**
     * Returns true if any of the given values are booleans. Otherwise returns false.
     *
     * @param mixed ... values
     * @return bool
     */
    public  function any(){
        return call_user_func_array($this->fetchStaticClassName() . '::' . __FUNCTION__, func_get_args());
    }

    /**
     * Returns true if none of the given values are booleans. Otherwise returns false.
     *
     * @param mixed... values
     * @return bool
     */
    public  function none(){
        return call_user_func_array($this->fetchStaticClassName() . '::' . __FUNCTION__, func_get_args());
    }

    /**
     * Returns true if all of the given values are booleans. Otherwise returns false.
     *
     * @return bool
     */
    public  function all(){
        return call_user_func_array($this->fetchStaticClassName() . '::' . __FUNCTION__, func_get_args());
    }

    /**
     * Returns true if the given value is a boolean. Otherwise returns false.
     *
     * @param mixed $value
     * @return bool
     */
    public  function value($value){
        return call_user_func_array($this->fetchStaticClassName() . '::' . __FUNCTION__, func_get_args());
    }
}
 