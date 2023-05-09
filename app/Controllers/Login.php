<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ManagerModel;

class Login extends BaseController{
    public function index(){
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $mng_model = new ManagerModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $model->where('emp_email',$email)->first();
        $mng_data = $mng_model->where('mng_email',$email)->first();

        // Employee and Manager Login Werification

        if ($data || $mng_data) {

            // Employee Login

            if ($data) {
                $pass = $data['emp_password'];
                $verify_pass = password_verify($password, $pass);
                if ($verify_pass) {
                    $ses_data = [
                        'emp_id' => $data['emp_id'],
                        'emp_name' => $data['emp_name'],
                        'emp_email' => $data['emp_email'],
                        'logged_in' => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/employee_schedule');
                    
                }
                
                else{
                    $session->setFlashdata('msg', 'Wrong Password');
                    // return redirect()->to('/login')
                    // echo "Something went wrong";
                    return view('/err_msg') . view('/login');
    
                }

    

            }

            // Manager Login

            if ($mng_data) {
                $pass_mng = $mng_data['mng_password'];

                if ($pass_mng === md5($password)) {
                    $ses_data = [
                        'mng_id' => $mng_data['mng_id'],
                        'mng_name' => $mng_data['mng_name'],
                        'mng_email' => $mng_data['mng_email'],
                        'logged_in' => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/dashboard/manager_dashboard');
    
                }


                else{
                    $session->setFlashdata('msg', 'Wrong Password');
                    return view('/err_msg') . view('/login');
    
                }

    
    
            }


        }

        
        else {
            $session->setFlashdata('msg', 'Email not Found');
            // return redirect()->to('/login')
            return view('/err_msg') . view('/login');

        }


    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}