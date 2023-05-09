<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'employee';
    protected $allowedFields = ['emp_name', 'emp_email', 'emp_password'];

    public function getEmployees(){
        $db = \Config\Database::connect();
        $query = $db->query('select emp_id, emp_name, emp_email from employee');
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        }
        else {
            return false;
        }
    }

    
}

