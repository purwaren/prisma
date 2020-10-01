<?php


class UnitStatistic extends CFormModel
{
    public $id;
    public $name;
    public $qty;
    public $state;
    public $city;

    public function rules() {
        return array(
            array('state, city', 'safe')
        );
    }

    public static function countByState() {
        $sql = 'SELECT COUNT(t2.id) AS qty, t1.id, t1.name FROM ref_states t1 LEFT JOIN address t2 ON t1.id = t2.state GROUP BY t1.id, t1.name ORDER BY id';
        $cmd = Yii::app()->db->createCommand($sql);
        return CJSON::encode($cmd->queryColumn());
    }

    public function countByCity() {
        $sql = 'SELECT COUNT(t2.id) AS qty, t1.id, t1.name FROM ref_cities t1 LEFT JOIN address t2 ON t1.id = t2.city WHERE t2.state = :state GROUP BY t1.id, t1.name ORDER BY id';
        $cmd = Yii::app()->db->createCommand($sql)->bindValue(':state', $this->state);
        return CJSON::encode($cmd->queryColumn());
    }

    public static function getAllStateName() {
        $sql = 'SELECT name FROM ref_states ORDER BY id';
        $cmd = Yii::app()->db->createCommand($sql);
        return CJSON::encode($cmd->queryColumn());
    }

    public function getAllCityName() {
        $sql = 'SELECT name FROM ref_cities WHERE state_id = :state ORDER BY id';
        $cmd = Yii::app()->db->createCommand($sql)->bindValue(':state', $this->state);
        return CJSON::encode($cmd->queryColumn());
    }
}