<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Member;

class UniqueFullName implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail)
    {
         // Split the full name into first name and last name
         $names = explode(' ', $value);
         $firstName = $names[0];
         $lastName = $names[1] ?? null;

         // Check if a user with the given first name and last name exists
         return !Member::where('first_name', $firstName)
                     ->where('last_name', $lastName)
                     ->exists();
    }

    public function message()
    {
        return 'The first name and last name combination is already in use.';
    }
}
