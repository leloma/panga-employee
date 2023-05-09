<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\ResponseInterface as HTTPResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // if user not loggec in
        if (! session()->get('logged_in')) {
            // then redirect to login page
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, HTTPResponseInterface $response, $arguments = null)
    {
        //Do something here
    }
}