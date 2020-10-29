<?php

namespace App\Controllers;

class Laptops extends BaseController {

    public function index() {

        $data = [

            'title' => 'Laptop'
        ];

        return view('laptops/index', $data);
    }
}
