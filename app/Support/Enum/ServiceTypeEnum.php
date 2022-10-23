<?php


namespace App\Support\Enum;


class ServiceTypeEnum
{
    const power_of_attorney = 'power_of_attorney';
    const inheritance = 'inheritance';
    const reference = 'reference';


    public static function all()
    {
        return [
            self::power_of_attorney => 'доверенность',
            self::inheritance => 'наследство',
            self::reference => 'справка'
        ];
    }
}
