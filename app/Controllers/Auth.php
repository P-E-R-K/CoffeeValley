<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Login | Coffee Valley"
        ]; // Mengirim data ke view
        return view('pages/login', $data);
        
    }

    public function login()
    {
        $data = [
            'title' => "Login | Coffee Valley"
        ]; // Mengirim data ke view
        return view('pages/login', $data);
        
    }

    public function process()
    {
        $users = new AuthModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        // dd($dataUser);
        if ($dataUser) {
            if ($password == $dataUser->password) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->nama,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
