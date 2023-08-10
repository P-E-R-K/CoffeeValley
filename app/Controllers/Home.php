<?php

namespace App\Controllers;

use App\Models\CoffeeModel;

class Home extends BaseController
{

    protected $CoffeeModel;
    public function __construct()
    {
        $this->CoffeeModel = new CoffeeModel();
    }
    public function index()
    {
        $data = [
            'title' => "Home | Coffee Valley",
            'today_coffee' => $this->CoffeeModel->getCoffee()

        ]; // Mengirim data ke view
        return view('pages/home', $data);
        
    }

    public function katalog()
    {
        $data = [
            'title' => "About | Belajar Ulang PHP"
        ]; //Mengirim data ke header
        return view('pages/about', $data);
    }

    public function distributor()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Rangkas',
                    'kota' => 'rangkasbitung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jalan jalan senang',
                    'kota' => 'Bintaro'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
