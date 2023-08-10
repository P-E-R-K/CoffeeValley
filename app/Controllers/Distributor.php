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
        
        return view('distributor/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form tambah Distributor'
        ];
        return view('distributor/create', $data);
    }

    public function edit($nama)
    {
        $data = [
            'title' => 'Edit Data Distributor',
            'distributor' => $this->DistributorModel->getDistributor($nama)
        ];
        return view('distributor/edit',$data);

        if(empty($data['distributor'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Distributor '. $nama . ' tidak ditemukan.');
            
        }
    }

    public function save()
    {
        $this->DistributorModel->save([
            'nama' => $this->request->getVar('nama'),
            'kota' => $this->request->getVar('kota'),
            'provinsi' => $this->request->getVar('provinsi'),
            'negara' => $this->request->getVar('negara'),
            'telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
        ]);
        
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/distributor');
    }
}