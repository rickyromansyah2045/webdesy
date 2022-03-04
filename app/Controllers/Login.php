<?php

namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\AuthModel;

class Login extends BaseController 
{
    public function index() 
    {
        $data['title']  = 'Login Administrator';

        return view('login/index', $data);
    }

    public function do_login()
    {
        $model = new AuthModel;
        $table = 'admin';
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $row = $model->get_data_login($username, $table);
        if ($row == NULL) 
        {
            session()->setFlashdata('pesan','username anda salah');
            return redirect()->to('/xlogin');
        }

        if (password_verify($password, $row->password)) 
        {
            $data = array(
                'log'   => TRUE,
                'name'  => $row->nama,
                'username'  => $row->username,
                'email'     => $row->email,
                'level'     => $row->level
            );
            session()->set($data);
            session()->setFlashdata('pesan','Berhasil Login');
            return redirect()->to('/xdashboard');
        }

        session()->setFlashdata('pesan','password and salah');
        return redirect()->to('/xlogin');
    }

    public function do_logout()
    {
        $session = session();
        $session->destroy();
        
        session()->setFlashdata('pesan','anda telah keluar');
        return redirect()->to('/xlogin');
    }

    public function do_register () 
    {
        // $model = new AuthModel();
        // $data = [
        //     'nama'          => 'admin',
        //     'username'      => 'admin',
        //     'password'      => password_hash('admin1', PASSWORD_DEFAULT),
        //     'level'         => 'administrator',
        //     'created_at'    => date('Y-m-d H:i:s'),
        //     'updated_at'    => date('Y-m-d H:i:s'),
        // ];
        // $model->save($data);
    }
}
