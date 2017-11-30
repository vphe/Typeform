<?php

namespace vphe\Typeform\Models;

use JsonSerializable;

class Model implements JsonSerializable {

    public function jsonSerialize()
    {

        $object_properties = get_object_vars($this);
        $json_result = array();

        foreach ($object_properties as $prop => $value) {

            $nested_object_condition = false;

            if(is_object($value)){

                $nested_object_properties = get_object_vars($value);

                foreach ($nested_object_properties as $nested_prop => $nested_value){
                    if(is_bool($nested_value) || is_object($nested_value) || ((is_string($nested_value) || is_array($nested_value)) && !empty($nested_value))){
                        $nested_object_condition = true;
                    }
                }
            } else {
                $nested_object_condition = true;
            }

            if((!empty($value) || is_bool($value) || $prop == 'vars') && $nested_object_condition){
                $json_result[$prop] = $value;
            }
        }

        return $json_result;
    }
}