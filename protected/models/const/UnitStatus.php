<?php


class UnitStatus
{
    const ACTIVE = 1;
    const NOT_YET_ACTIVE = 2;
    const BLOCKED = 3;

    public static function getAllOptions() {
        return array(
            self::NOT_YET_ACTIVE => 'Belum Aktif',
            self::ACTIVE => 'Aktif',
            self::BLOCKED => 'Diblokir'
        );
    }

    public static function getStatus($status) {
        $options = self::getAllOptions();
        return $options[$status];
    }
}