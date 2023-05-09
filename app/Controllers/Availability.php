<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmployeeAvailabilityModel;

class Availability extends BaseController
{
    public function index()
    {
        // helper(['form']);

        // $session = session();
        // $data['ses_name'] = $session->get('emp_name');
        echo view('availability');
    }

    public function save()
    {



        //include helper form
        helper(['form']);

        $myvalues = array(
            $_POST['time-out1'], $_POST['time-in1'], $_POST['time-out2'], $_POST['time-in2'],
            $_POST['time-out3'], $_POST['time-in3'], $_POST['time-out4'], $_POST['time-in4'],
            $_POST['time-out5'], $_POST['time-in5'], $_POST['time-out6'], $_POST['time-in6'],
            $_POST['time-out7'], $_POST['time-in7'],
        );

        // Time out and Time in my custom validations
        $min_hours = 600;
        if (in_array("NotAvailable", $myvalues) === false) {
            $timeout1 = (int)$_POST['time-out1'];
            $timein1 = (int)$_POST['time-in1'];
            $timeout2 = (int)$_POST['time-out2'];
            $timein2 = (int)$_POST['time-in2'];
            $timeout3 = (int)$_POST['time-out3'];
            $timein3 = (int)$_POST['time-in3'];
            $timeout4 = (int)$_POST['time-out4'];
            $timein4 = (int)$_POST['time-in4'];
            $timeout5 = (int)$_POST['time-out5'];
            $timein5 = (int)$_POST['time-in5'];
            $timeout6 = (int)$_POST['time-out6'];
            $timein6 = (int)$_POST['time-in6'];
            $timeout7 = (int)$_POST['time-out7'];
            $timein7 = (int)$_POST['time-in7'];
    
            $sub1 = $timeout1 - $timein1;
            $sub2 = $timeout2 - $timein2;
            $sub3 = $timeout3 - $timein3;
            $sub4 = $timeout4 - $timein4;
            $sub5 = $timeout5 - $timein5;
            $sub6 = $timeout6 - $timein6;
            $sub7 = $timeout7 - $timein7;
    
            if ($timeout1 <= $timein1 || $timeout2 <= $timein2 || $timeout3 <= $timein3 || $timeout4 <= $timein4 || $timeout5 <= $timein5 || $timeout6 <= $timein6 || $timeout7 <= $timein7) {
                $data['error1'] = "Time out should be after time in";            
                echo view('availability', $data );
                unset($data);
                }
            else if ($sub1 < $min_hours ||  $sub2 < $min_hours || $sub3 < $min_hours || $sub4 < $min_hours || $sub5 < $min_hours || $sub6 < $min_hours || $sub7 < $min_hours) {
                $data['error2'] = "Shift hours should be 6 hours or more!";            
                echo view('availability', $data);
                unset($data);
    
            }

            else {

                $emp_availability_model = new EmployeeAvailabilityModel();
                $session = session();
                // $data['ses_name'] = $session->get('emp_name');
                $data1['ses_id'] = $session->get('emp_id');
                $data1['ses_name'] = $session->get('emp_name');

                //include helper form
                helper(['form']);
                $db      = \Config\Database::connect();
                $builder = $db->table('emp_availability');
    
        
                // Inserting into db emp_availability
                $mydata = [
                    [
                    'fore_emp_id' => $data1['ses_id'],
                    'emp_name' => $data1['ses_name'],

                    'start_date' => $this->request->getPost('start-date'),
                    'end_date' => $this->request->getPost('end-date'),
                    'day' => $this->request->getPost('Monday'),
                    'time_in' => $this->request->getPost('time-in1'),
                    'time_out' => $this->request->getPost('time-out1'),
    
    
    
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Tuesday'),
                        'time_in' => $this->request->getPost('time-in2'),
                        'time_out' => $this->request->getPost('time-out2'),
        
        
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Wednesday'),
                        'time_in' => $this->request->getPost('time-in3'),
                        'time_out' => $this->request->getPost('time-out3'),
        
        
        
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Thursday'),
                        'time_in' => $this->request->getPost('time-in4'),
                        'time_out' => $this->request->getPost('time-out4'),
            
            
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Friday'),
                        'time_in' => $this->request->getPost('time-in5'),
                        'time_out' => $this->request->getPost('time-out5'),
            
            
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Saturday'),
                        'time_in' => $this->request->getPost('time-in6'),
                        'time_out' => $this->request->getPost('time-out6'),
            
            
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Sunday'),
                        'time_in' => $this->request->getPost('time-in7'),
                        'time_out' => $this->request->getPost('time-out7'),
            
            
                    ],


                ];
    
                $builder->insertBatch($mydata);
                // $emp_availability_model->save($mydata);
                
        
    
                $data['success'] = "Successfully Submitted";            
                echo view('availability', $data);
                unset($data);
    
            }
    
    
        }

        else if(in_array("NotAvailable", $myvalues))
        {

            $emp_availability_model = new EmployeeAvailabilityModel();
            $session = session();
            // $data['ses_name'] = $session->get('emp_name');
            $data1['ses_id'] = $session->get('emp_id');
            $data1['ses_name'] = $session->get('emp_name');
            //include helper form
            helper(['form']);
            $db      = \Config\Database::connect();
            $builder = $db->table('emp_availability');

    
                // Inserting into db emp_availability
                $mydata = [
                    [
                    'fore_emp_id' => $data1['ses_id'],
                    'emp_name' => $data1['ses_name'],
                    'start_date' => $this->request->getPost('start-date'),
                    'end_date' => $this->request->getPost('end-date'),
                    'day' => $this->request->getPost('Monday'),
                    'time_in' => $this->request->getPost('time-in1'),
                    'time_out' => $this->request->getPost('time-out1'),
    
    
    
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Tuesday'),
                        'time_in' => $this->request->getPost('time-in2'),
                        'time_out' => $this->request->getPost('time-out2'),
        
        
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Wednesday'),
                        'time_in' => $this->request->getPost('time-in3'),
                        'time_out' => $this->request->getPost('time-out3'),
        
        
        
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Thursday'),
                        'time_in' => $this->request->getPost('time-in4'),
                        'time_out' => $this->request->getPost('time-out4'),
            
            
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Friday'),
                        'time_in' => $this->request->getPost('time-in5'),
                        'time_out' => $this->request->getPost('time-out5'),
            
            
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Saturday'),
                        'time_in' => $this->request->getPost('time-in6'),
                        'time_out' => $this->request->getPost('time-out6'),
            
            
                    ],
                    [
                        'fore_emp_id' => $data1['ses_id'],
                        'emp_name' => $data1['ses_name'],

                        'start_date' => $this->request->getPost('start-date'),
                        'end_date' => $this->request->getPost('end-date'),
                        'day' => $this->request->getPost('Sunday'),
                        'time_in' => $this->request->getPost('time-in7'),
                        'time_out' => $this->request->getPost('time-out7'),
            
            
                    ],


                ];

            $builder->insertBatch($mydata);
            // $emp_availability_model->save($mydata);
            
    

            $data['success'] = "Successfully Submitted";            
            echo view('availability', $data);
            unset($data);
        }


    }




    

}