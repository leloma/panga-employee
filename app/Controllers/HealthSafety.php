<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\HealthModel;

class HealthSafety extends BaseController 
{
    // public function index()
    // {
    //     helper(['form']);
    //     $data = [];
    //     echo view('register', $data);
    // }

    public function save()
    {
        $healthmodel = new HealthModel();
        $session = session();
        // $data['ses_name'] = $session->get('emp_name');
        $data1['ses_id'] = $session->get('emp_id');
        $data1['ses_name'] = $session->get('emp_name');
        //include helper form
        helper(['form']);


        // Inserting into db health issues
        $mydata = [
            'health_issue' => $this->request->getPost('health-issue'),
            'emp_name' => $data1['ses_name'],
            'not_performed_task' => $this->request->getPost('task-not'),
            'fore_emp_id' => $data1['ses_id'],
        ];
            
        $healthmodel->save($mydata);
        
        
        $data['msg'] = "Successfully Submitted";
        echo view('health_and_safety', $data);
        


    }

    public function gethealthdetails()
    {
        $healthmodel = new HealthModel();
        $data['healthdetails'] = $healthmodel->getHealthDetails();

        echo view('admin_health', $data);

    }
}