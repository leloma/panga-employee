<?php namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model{
    protected $table = 'task_tbl';
    protected $allowedFields = ['task_name'];

    public function getTasks(){
        $db = \Config\Database::connect();
        $query = $db->query('select  task_name from task_tbl');
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        }
        else {
            return false;
        }
    }
}

