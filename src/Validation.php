<?php namespace Mohsenvalidation;

class Validation
{
    public function hass(array $data ,string $field) :bool
    {
        return isset($data[$field]) ;
    }
}


?>
