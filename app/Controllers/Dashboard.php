<?php namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\EmployeeAvailabilityModel;
use App\Models\AdminScheduleModel;

class Dashboard extends BaseController
{

    public function index()
    {
        // $session = session();
        // echo "Welcome back, ".$session->get('emp_name');
        // $data['ses_name'] = $session->get('emp_name');
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getTasks();


        echo view('health_and_safety', $data);
    }

    public function manager_dashboard()
    {
        $employeeModel = new UserModel();

        $taskModel = new TaskModel();
        $data['employees'] = $employeeModel->getEmployees();

        $data['tasks'] = $taskModel->getTasks();

        echo view('/manager_dashboard', $data);


    }

    public function save()
    {
        $adminScheduleModel = new AdminScheduleModel();
        $employeeModel = new UserModel();
        $myemployees = $employeeModel->getEmployees();

        $session = session();
        $data1['ses_id'] = $session->get('mng_id');
        $data1['ses_name'] = $session->get('mng_name');

        //include helper form
        helper(['form']);
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_schedule');


        // Defining our variables from the form

        $employees = count($this->request->getPost('emp_id'));

        $emp_id = $this->request->getPost('emp_id');
        $emp_name = $this->request->getPost('emp_name');
        $task = $this->request->getPost('task');
        $monday = $this->request->getPost('Monday');
        $tuesday = $this->request->getPost('Tuesday');
        $wednesday = $this->request->getPost('Wednesday');
        $thursday = $this->request->getPost('Thursday');
        $friday = $this->request->getPost('Friday');
        $saturday = $this->request->getPost('Saturday');
        $sunday = $this->request->getPost('Sunday');
        $mon_shift = $this->request->getPost('mon-shift');
        $tue_shift = $this->request->getPost('tue-shift');
        $wed_shift = $this->request->getPost('wed-shift');
        $thur_shift = $this->request->getPost('thur-shift');
        $fri_shift = $this->request->getPost('fri-shift');
        $sat_shift = $this->request->getPost('sat-shift');
        $sun_shift = $this->request->getPost('sun-shift');
        

        //Inserting data to the database tbl_schedule

        for ($i=0; $i < $employees ; $i++) { 

        
            $mydata[$i] = [
                    
                [
                'mng_id' => $data1['ses_id'],
                'mng_name' => $data1['ses_name'],
                'start_date' => $this->request->getPost('start_date'),
                'end_date' => $this->request->getPost('end_date'),
                'emp_id' => $emp_id[$i],
                'emp_name' => $emp_name[$i],
                'day' => $monday[$i],
                'task' => $task[$i],
                'shift_time' => $mon_shift[$i],
                ],

                [
                    'mng_id' => $data1['ses_id'],
                    'mng_name' => $data1['ses_name'],
                    'start_date' => $this->request->getPost('start_date'),
                    'end_date' => $this->request->getPost('end_date'),
                    'emp_id' => $emp_id[$i],
                    'emp_name' => $emp_name[$i],
                    'day' => $tuesday[$i],
                    'task' => $task[$i],
                    'shift_time' => $tue_shift[$i],
                ],
        
                [
                    'mng_id' => $data1['ses_id'],
                    'mng_name' => $data1['ses_name'],
                    'start_date' => $this->request->getPost('start_date'),
                    'end_date' => $this->request->getPost('end_date'),
                    'emp_id' => $emp_id[$i],
                    'emp_name' => $emp_name[$i],
                    'day' => $wednesday[$i],
                    'task' => $task[$i],
                    'shift_time' => $wed_shift[$i],
                    ],
        
                [
                    'mng_id' => $data1['ses_id'],
                    'mng_name' => $data1['ses_name'],
                    'start_date' => $this->request->getPost('start_date'),
                    'end_date' => $this->request->getPost('end_date'),
                    'emp_id' => $emp_id[$i],
                    'emp_name' => $emp_name[$i],
                    'day' => $thursday[$i],
                    'task' => $task[$i],
                    'shift_time' => $thur_shift[$i],
                    ],
            
                [
                    'mng_id' => $data1['ses_id'],
                    'mng_name' => $data1['ses_name'],
                    'start_date' => $this->request->getPost('start_date'),
                    'end_date' => $this->request->getPost('end_date'),
                    'emp_id' => $emp_id[$i],
                    'emp_name' => $emp_name[$i],
                    'day' => $friday[$i],
                    'task' => $task[$i],
                    'shift_time' => $fri_shift[$i],
                    ],
                
                [
                    'mng_id' => $data1['ses_id'],
                    'mng_name' => $data1['ses_name'],
                    'start_date' => $this->request->getPost('start_date'),
                    'end_date' => $this->request->getPost('end_date'),
                    'emp_id' => $emp_id[$i],
                    'emp_name' => $emp_name[$i],
                    'day' => $saturday[$i],
                    'task' => $task[$i],
                    'shift_time' => $sat_shift[$i],
                    ],
            
                [
                    'mng_id' => $data1['ses_id'],
                    'mng_name' => $data1['ses_name'],
                    'start_date' => $this->request->getPost('start_date'),
                    'end_date' => $this->request->getPost('end_date'),
                    'emp_id' => $emp_id[$i],
                    'emp_name' => $emp_name[$i],
                    'day' => $sunday[$i],
                    'task' => $task[$i],
                    'shift_time' => $sun_shift[$i],
                    ],
            

            ];
                $builder->insertBatch($mydata[$i]);
                // echo $emp_id[$i];
                // echo $emp_name[$i];
                // echo $task[$i];
        };
        echo "Schedule Successfully Posted";

    }



    public function employee_availability_details()
    {

        $empAvailabilityModel = new EmployeeAvailabilityModel();
        $data['emp_availability'] = $empAvailabilityModel->getAvailabilityDetails();

        echo view('view_availability', $data);
    }

    public function employee_schedule()
    {
        $session = session();
        $data1['ses_id'] = $session->get('emp_id');
        $data1['ses_name'] = $session->get('emp_name');

        $empScheduleModel = new AdminScheduleModel();
        $data['empschedule'] = $empScheduleModel->getEmployeeSchedule($data1['ses_id']);

        echo view('employee_schedule', $data);

    }

    public function all_schedule()
    {
        $empScheduleModel = new AdminScheduleModel();
        $data['allschedule'] = $empScheduleModel->getAllSchedule();

        echo view('all_schedule', $data);

    }

}