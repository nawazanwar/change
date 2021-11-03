<?php

declare(strict_types=1);

namespace App\Enum;

class GuestNavEnum extends AbstractEnum
{
    public const START_A_PETITION = 'start_a_petition';
    public const MY_PETITIONS = 'my_petitions';
    public const BROWSE = 'Browse';

    public static function getValues(): array
    {
        return [
            self::START_A_PETITION,
            self::MY_PETITIONS,
            self::BROWSE
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::START_A_PETITION => __(sprintf('%s.%s', 'change', self::START_A_PETITION)),
            self::MY_PETITIONS => __(sprintf('%s.%s', 'change', self::MY_PETITIONS)),
            self::BROWSE => __(sprintf('%s.%s', 'change', self::BROWSE))
        ];
    }
}
