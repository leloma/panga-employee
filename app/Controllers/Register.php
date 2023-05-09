<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends BaseController 
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save()
    {
        $model = new UserModel();

        //include helper form
        helper(['form']);
        //set rules validation form 
        $rules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[employee.emp_email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confirm-password' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'emp_name' => $this->request->getPost('name'),
                'emp_email' => $this->request->getPost('email'),
                'emp_password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ];
            
            $model->save($data);
            return redirect()->to('login');
        }
        else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}