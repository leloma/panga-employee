<?php namespace App\Models;

use CodeIgniter\Model;

class TaskChangeModel extends Model{
    protected $table = 'task_change';
    protected $allowedFields = ['emp_id', 'emp_name','start_date','end_date','preffered_task', 'reason'];

    public function gettaskchange(){
        $db = \Config\Database::connect();
        $query = $db->query('select emp_name, start_date, end_date,preffered_task, reason from task_change ORDER BY emp_name');
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        }
        else {
            return false;
        }
    }

}
