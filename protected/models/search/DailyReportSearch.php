<?php

class DailyReportSearch extends CFormModel {
    public $start_date;
    public $end_date;
    public $type;

    public function rules()
    {
        return array(
            array('type, start_date', 'required'),
            array('end_date', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'start_date' => 'Tanggal Awal',
            'end_date' => 'Tanggal Akhir'
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria();

        $criteria->select = "id, order_number, to_char(order_date, 'DD-MON-YYYY') as order_date, unit_id, created_by, created_at";
        
        if (!empty($this->start_date))
            $criteria->compare('order_date', '>= '.$this->start_date);
        if (!empty($this->end_date))
            $criteria->compare('order_date', '<= '.$this->end_date);

        return new CActiveDataProvider(OrderCustom::model(), array(
            'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'order_date DESC'
            )
		));
    }

    public function searchMonthlySummary()
    {
        $cmd = Yii::app()->db->createCommand();
        $cmd->from('orders t1');
        $cmd->leftJoin('order_detail t2', 't1.id = t2.order_id');
        $cmd->leftJoin('item t3', 't2.item_id = t3.id');
        $cmd->where("t1.order_date >= TO_DATE(:start, 'DD-MON-YYYY') AND t1.order_date <= TO_DATE(:end, 'DD-MON-YYYY HH24:MI:SS')", array(
            ':start' => $this->start_date,
            ':end'=> $this->end_date.' 23:59:59'
        ));
        $cmd->group('order_date, item_id, name');
        $cmd->order('order_date');
        $cmd->select("TO_CHAR(order_date, 'DD-MON-YYYY') AS order_date, item_id, name, SUM(qty) AS qty");

        $data = $cmd->queryAll();
        $tables = array();
        $curr_date = $this->start_date;
        foreach($data as $row) {
            if ($row['order_date'] === $curr_date) {
                $tables[$curr_date][$row['name']] = $row['qty']; 
            }
            else {
                $tables[$curr_date] = array();
            }
        }
    }

    protected function generateAllDayInPeriod() 
    {

    }

    protected function getAllItemByCategory()
    {
        
    }
}