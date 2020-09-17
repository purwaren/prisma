<?php


class OrderStatus {
    const STATUS_DRAFT = 0;
    const STATUS_PROCESS = 1;
    const STATUS_DELIVER = 2;
    const STATUS_FINISH = 3;
    const STATUS_CANCELED = 4;

    public static function getAllOptions() {
        return array(
            self::STATUS_DRAFT => 'Draft',
            self::STATUS_PROCESS => 'Sedang Diproses',
            self::STATUS_DELIVER => 'Dalam Pengiriman',
            self::STATUS_FINISH => 'Selesai',
            self::STATUS_CANCELED => 'Dibatalkan'
        );
    }

    public static function getValue($id) {
        $options = self::getAllOptions();
        return $options[$id];
    }
}