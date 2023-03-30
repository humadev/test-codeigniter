<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function testing(string $nama) {
        $a = new MahasiswaModel();
        $x['mahasiswas'] = $a->findAll();
        $x['korti'] = $a->find(1);
        return view("pages", $x)
            .view('welcome_message')
            .view('welcome_message');
        
        // foreach ($data as $key => $value) {
        //     echo $value;
        // }
    }
}
