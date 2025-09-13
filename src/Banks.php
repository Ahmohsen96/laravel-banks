<?php

namespace Banks;

class Banks
{
    public static function all($country = null)
    {
        $banks = config('banks');

        if ($country && isset($banks[$country])) {
            return $banks[$country];
        }

        return $banks;
    }
}
