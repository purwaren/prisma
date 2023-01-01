<?php 
/**
 * UnitReportSearch
 * created by Purwa
 */
class UnitReportSearch extends CFormModel {
    public $start_date;
    public $end_date;
    public $state;
    public $city;
    public $sort_by;
    public $sort_type = 'DESC';

    public function rules()
    {
        return array(
            array('start_date, end_date, sort_type', 'required'),
            array('state, city', 'safe')
        );
    }

    public static function getSortByOptions() {
        return array(
            'A' => 'Jumlah Order'
        );
    }

    public function searchUnitsSummary() {
        if ($this->validate()) {
            //filter location
            $filter=array();
            
            //query level 1 => get the total, sort by total
            $cmd1 = Yii::app()->db->createCommand();
            $cmd1->select('unit_id, SUM(qty) AS qty');
            $cmd1->from('orders t1');
            $cmd1->leftJoin('order_detail t2', 't1.id = t2.order_id');
            $cmd1->leftJoin('item t3', 't2.item_id = t3.id');
            $cmd1->leftJoin('unit t4', 't1.unit_id = t4.id');
            $cmd1->leftJoin('address t5', 't4.address_id = t5.id');
            $cmd1->where('t3.cat_id = :cat', array(':cat'=> 1));
            $cmd1->andWhere('t1.order_date >= :start AND t1.order_date <= :end', array(':start'=>$this->start_date, ':end'=>$this->end_date));
            
            if (!empty($this->state)) {
                $filter['state'] = $this->state;
                $cmd1->andWhere('t5.state = :state', array(':state'=>$this->state));
            }
            if (!empty($this->city)) {
                $filter['city'] = $this->city;
                $cmd1->andWhere('t5.city = :city', array(':city'=>$this->city));
            }
            
            $cmd1->group('unit_id');
            $cmd1->order = 'SUM(qty) '.$this->sort_type;
            $data = $cmd1->queryAll();
            if (!empty($data)) {
                $temp = array();
                foreach($data as $row) {
                    $temp[$row['unit_id']] = $row['qty'];
                }
                $units = UnitCustom::getAllUnits($filter);
                foreach($units as $key=>$val) {
                    if (!isset($temp[$key])) {
                        $data[] = array(
                            'unit_id'=>$key,
                            'qty'=> 0
                        );
                    }
                }
                return $data;
            }
        }
    }

    public function searchMonthlySummary()
    {
        if ($this->validate()) {
            //query level 2 => get the qty for each item
            $cmd2 = Yii::app()->db->createCommand();
            $cmd2->select('unit_id, t2.item_id, SUM(qty) AS qty');
            $cmd2->from('orders t1');
            $cmd2->leftJoin('order_detail t2', 't1.id = t2.order_id');
            $cmd2->leftJoin('item t3', 't2.item_id = t3.id');
            $cmd2->where('t3.cat_id = :cat', array(':cat'=> 1));
            $cmd2->andWhere('t1.order_date >= :start AND t1.order_date <= :end', array(':start'=>$this->start_date, ':end'=>$this->end_date));
            $cmd2->group('t1.unit_id, t2.item_id');
            $cmd2->order('t1.unit_id, t2.item_id');
            $data2 = $cmd2->queryAll();
            $tables = array();
            if (!empty($data2)) {
                foreach($data2 as $row) {
                    $tables[$row['unit_id']][$row['item_id']] = $row['qty'];
                }
            }

            return $tables;
        }
    }

    protected function generateAllDayInPeriod() 
    {
        $dates = array();
        if ($this->validate()) {
            $period = new DatePeriod(
                new DateTime($this->start_date),
                new DateInterval('P1D'),
                new DateTime($this->end_date)
            );
            
            foreach($period as $row) {
                $dates[] = $row->format('d-M-Y');
            }
            $dates[] = (new DateTime($this->end_date))->format('d-M-Y');
        }

        return $dates;
    }
}