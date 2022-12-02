<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming'
        ];

        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function device()
    {
        $data = [
            'title' => 'device'
        ];
        echo view('layout/header', $data);
        echo view('pages/device');
        echo view('layout/footer');
    }
}
