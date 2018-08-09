<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Zipcode implements Rule
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
        //CHECK IF IS A VALID GERMANY ZIPCODE
        return preg_match("/\b(?!01000)(?!99999)(0[1-9]\d{3}|[1-9]\d{4})\b/i", $value);

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid Zipcode.';
    }
}
