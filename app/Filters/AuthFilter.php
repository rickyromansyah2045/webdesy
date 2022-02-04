<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        $session = session();
        if ($session->get('log') != TRUE) 
        {
            return redirect()->to('/xlogin');
        } 
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        $session = session();
        if ($session->get('log') == TRUE) 
        {
            return redirect()->to('/xdashboard');
        }
    }
}