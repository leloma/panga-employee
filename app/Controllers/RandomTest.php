<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\HealthModel;

class RandomTest extends BaseController 
{
    public function index()
    {
        $data['name'] = "Leloo";
        $data['school'] = "Strath"; 
        echo view('testing', $data);
    }
}