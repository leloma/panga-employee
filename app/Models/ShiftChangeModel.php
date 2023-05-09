<?php namespace App\Models;

use CodeIgniter\Model;

class ShiftChangeModel extends Model{
    protected $table = 'shift_change';
    protected $allowedFields = ['emp_id', 'emp_name','start_date','end_date','preffered_shift', 'reason'];

    public function getshiftchange(){
        $db = \Config\Database::connect();
        $query = $db->query('select emp_name, start_date, end_date,preffered_shift, reason from shift_change ORDER BY emp_name');
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        }
        else {
            return false;
        }
    }

}
