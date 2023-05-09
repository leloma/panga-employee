<?php namespace App\Models;

use CodeIgniter\Model;

class EmployeeAvailabilityModel extends Model{
    protected $table = 'emp_availability';
    protected $allowedFields = ['emp_name','start_date', 'end_date', 'day', 'time_in', 'time_out'];

    public function getAvailabilityDetails(){
        $db = \Config\Database::connect();
        $query = $db->query("select emp_name, start_date, end_date, day, time_in, time_out from emp_availability WHERE time_in <> 'NotAvailable' AND time_out <> 'NotAvailable' ORDER BY emp_name");
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        }
        else {
            return false;
        }
    }

}

