<?php namespace App\Models;

use CodeIgniter\Model;

class AdminScheduleModel extends Model{
    protected $table = 'tbl_schedule';
    protected $allowedFields = ['mng_id', 'mng_name', 'start_date', 'end_date', 'emp_id', 'emp_name', 'day', 'task', 'shift_time'];

    public function getEmployeeSchedule($emp_id){
        $db = \Config\Database::connect();
        $query = $db->query("select emp_name, start_date, end_date, day, task, shift_time from tbl_schedule WHERE task  <> ''  AND shift_time <> '' AND emp_id = '".$emp_id."'ORDER BY start_date DESC");
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        }
        else {
            return false;
        }
    }

    public function getAllSchedule()
    {
        $db = \Config\Database::connect();
        $query = $db->query("select mng_name, emp_name, start_date, end_date, day, task, shift_time from tbl_schedule WHERE task  <> ''  AND shift_time <> '' ORDER BY start_date DESC");
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        }
        else {
            return false;
        }
    
    }

}