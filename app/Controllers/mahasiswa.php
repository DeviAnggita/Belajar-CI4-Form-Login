<?php

namespace App\Controllers;

class mahasiswa extends BaseController
{
    public function index()
    {
        //memanggil helper form 
        helper(['form', 'url']);

        if (! $this->validate(
            [
            'username' => ['label' => 'Username', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[3]'],
            ] )) {
            echo view('Signup', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('Success');
        }
    }

}
