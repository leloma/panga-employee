<?php namespace App\Models;

use CodeIgniter\Model;

class HealthModel extends Model{
    protected $table = 'health_issue';
    protected $allowedFields = ['fore_emp_id', 'emp_name','health_issue', 'not_performed_task'];

    public function getHealthDetails(){
        $db = \Config\Database::connect();
        $query = $db->query('select emp_name, health_issue, not_performed_task from health_issue ORDER BY emp_name');
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        }
        else {
            return false;
        }
    }

}

