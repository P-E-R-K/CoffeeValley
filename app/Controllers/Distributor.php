<?php

namespace App\Controllers;

use App\Models\DistributorModel;

class Distributor extends BaseController
{

    protected $DistributorModel;
    public function __construct()
    {
        $this->DistributorModel = new DistributorModel();
    }

    public function index()
    {   
        // $Distributor = $this->DistributorModel->findAll();
        $data = [
            'title' => 'Daftar Distributor',
            'Distributor' => $this->DistributorModel->getDistributor()
        ];

        // Konek DB tanpa model
        // $db = \config\Database::connect();
        // $Distributor = $db->query("SELECT * FROM Distributor");

        // foreach($Distributor->getResultArray() as $row) {
        //     d($row);
        // }
        //  $komikModel = new \App\Models\DistributorModel();
        
        return view('distributor/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form tambah Distributor'
        ];
        return view('distributor/create', $data);
    }

    public function save()
    {
        dd($this->request->getVar('nama'));
    }
}