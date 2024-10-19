<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CustomePasswordValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return 
        preg_match('/^(?=.*[A-Z])(?=.[a-z])(?=.*\d)(?=.*[^\w\d\s])\S{8,}/' , $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Password must be at least 8 character long and contain at least one uppercase, lowercase, number and special character.';
    }
}
