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
        $cmd->where("t3.cat_id = :cat", array(':cat'=> 1));
        $cmd->group('order_date, item_id, name');
        $cmd->order('order_date, item_id');
        $cmd->select("TO_CHAR(order_date, 'DD-MON-YYYY') AS order_date, item_id, name, SUM(qty) AS qty");
        
        $allday = $this->generateAllDayInPeriod();
        $tables = array();
        if (!empty($allday)) {
            foreach($allday as $day) {
                $cmd->andWhere("TO_CHAR(t1.order_date, 'DD-MON-YYYY') = UPPER(:date)", array(':date'=>strtoupper($day)));
                $data = $cmd->queryAll();
                if (!empty($data)) {
                    foreach ($data as $item) {
                        $tables[$day][$item['item_id']] = $item['qty'];
                    }
                }
                else {
                    $tables[$day] = array();
                }
            }
        }

        return $tables;
    }

    protected function generateAllDayInPeriod() 
    {
        $period = new DatePeriod(
            new DateTime($this->start_date),
            new DateInterval('P1D'),
            new DateTime($this->end_date)
        );
        
        $dates = array();
        foreach($period as $row) {
            $dates[] = $row->format('d-M-Y');
        }
        $dates[] = (new DateTime($this->end_date))->format('d-M-Y');

        return $dates;
    }

    
}