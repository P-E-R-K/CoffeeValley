<?php

namespace App\Controllers;

use App\Models\CoffeeModel;

class Coffee extends BaseController
{

    protected $CoffeeModel;
    public function __construct()
    {
        $this->CoffeeModel = new CoffeeModel();
    }

    public function index()
    {   
        // $Coffee = $this->CoffeeModel->findAll();
        $data = [
            'title' => 'Daftar Coffee',
            'Coffee' => $this->CoffeeModel->getCoffee()
        ];

        // Konek DB tanpa model
        // $db = \config\Database::connect();
        // $Coffee = $db->query("SELECT * FROM Coffee");

        // foreach($Coffee->getResultArray() as $row) {
        //     d($row);
        // }
        //  $komikModel = new \App\Models\CoffeeModel();
        
        return view('coffee/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form tambah Coffee'
        ];
        return view('coffee/create', $data);
    }

    public function save()
    {
        dd($this->request->getVar('nama'));
    }
}