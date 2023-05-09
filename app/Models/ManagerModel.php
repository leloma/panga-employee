<?php namespace App\Models;

use CodeIgniter\Model;

class ManagerModel extends Model{
    protected $table = 'manager';
    protected $allowedFields = ['mng_name', 'mng_email', 'mng_password'];
}

