<?php
namespace jorgelsaud\CustomValidators;

class AlphaLettersValidator
{
    public function validate($attribute, $value)
    {
        return preg_match('/^[\pL\s]+$/u', $value);
    }
}
