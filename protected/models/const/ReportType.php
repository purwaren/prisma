<?php

class ReportType {
    const TYPE_DETAIL_DAILY = 1;
    const TYPE_DETAIL_MONTHLY = 2;
    const TYPE_SUMMARY_DAILY = 3;
    const TYPE_SUMMARY_MONTHLY = 4;
    const TYPE_SUMMARY_YEARLY = 5;

    public static function getAllOptions()
    {
        return array(
            //self::TYPE_DETAIL_DAILY => 'Laporan Transaksi Harian',
            self::TYPE_DETAIL_MONTHLY => 'Laporan Transaksi Bulanan',
            //self::TYPE_SUMMARY_DAILY => 'Laporan Rekap Harian',
            self::TYPE_SUMMARY_MONTHLY => 'Rekap Transaksi Unit Bulanan',
            //self::TYPE_SUMMARY_YEARLY => 'Laporan Rekap Tahunan'
        );
    }
}