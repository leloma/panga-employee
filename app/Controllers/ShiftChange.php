<?php namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\EmployeeAvailabilityModel;
use App\Models\AdminScheduleModel;
use App\Models\TaskChangeModel;
use App\Models\ShiftChangeModel;

class ShiftChange extends BaseController
{

    public function index()
    {


        echo view('shift_change');
    }

    public function save()
    {
        $shiftchangemodel = new ShiftChangeModel();
        $session = session();
        // $data['ses_name'] = $session->get('emp_name');
        $data1['ses_id'] = $session->get('emp_id');
        $data1['ses_name'] = $session->get('emp_name');
        //include helper form
        helper(['form']);


        // Inserting into db health issues
        $mydata = [
            'emp_id' => $data1['ses_id'],
            'emp_name' => $data1['ses_name'],
            'preffered_shift' => $this->request->getPost('preferred_shift'),
            'start_date' => $this->request->getPost('startdate'),
            'end_date' => $this->request->getPost('enddate'),
            'reason' => $this->request->getPost('reason'),


        ];
            
        $shiftchangemodel->save($mydata);
        
        
        $data['msg'] = "Successfully Submitted";
        echo view('/shift_change', $data);

    }
}