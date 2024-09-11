<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login()
    {
        $data = array();

        return view('layout/header')
            . view('login')
            . view('layout/footer');
    }       

    public function main(){
        return view('layout/header')
        . view('main')
        . view('layout/footer');
    }
    public function register(){
        $data['nama']="Azim";
        $data['username']="Azim";
        $data['email']="azimnohtaz@gmail.com";
        $data['password']="12345";

        return view('layout/header')
        . view('register', $data)
        . view('layout/footer');
    }
    public function dashboard(){
        return view('layout/header2')
        . view('dashboard')
        . view('layout/footer');
    }
    public function newtask(){
        return view('layout/header2')
        . view('newtask')
        . view('layout/footer');
    }
}
