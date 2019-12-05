<?php


class UnitStatistic extends CFormModel
{
    public $id;
    public $name;
    public $qty;

    public static function countByState() {
        $sql = 'SELECT COUNT(t2.id) AS qty, t1.id, t1.name FROM ref_states t1 LEFT JOIN address t2 ON t1.id = t2.state GROUP BY t1.id, t1.name ORDER BY id';
        $cmd = Yii::app()->db->createCommand($sql);
        return CJSON::encode($cmd->queryColumn());
    }

    public static function getAllStateName() {
        $sql = 'SELECT name FROM ref_states ORDER BY id';
        $cmd = Yii::app()->db->createCommand($sql);
        return CJSON::encode($cmd->queryColumn());
    }
}