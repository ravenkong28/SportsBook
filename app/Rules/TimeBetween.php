<?php

namespace App\Rules;

// require 'vendor/autoload.php';
// use Carbon\Carbon;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Carbon;

class TimeBetween implements Rule
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
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);

        //when the restauran is open 
        $openStore = Carbon::createFromTimeString('09:00:00');
        $closeStore = Carbon::createFromTimeString('22:00:00');

        return $pickupTime->between($openStore, $closeStore) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The store open on 9 AM and close on 22 PM';
    }
}
