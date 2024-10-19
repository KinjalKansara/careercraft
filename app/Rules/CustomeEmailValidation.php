<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CustomeEmailValidation implements Rule
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
        // preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-z]{2.}$/', $value);
        $domainPart = explode('@', $value)[1] ?? null;

        if(!$domainPart)
        {
            return false;
        }

        if($domainPart != '.com' || '.in')
        {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Enter Valid Email Address.';
    }
}
