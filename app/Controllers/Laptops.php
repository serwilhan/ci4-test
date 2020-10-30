<?php

namespace App\Controllers;

use App\Models\LaptopModel;

class Laptops extends BaseController {

    protected $laptopModel;

    public function __construct() {

        $this->laptopModel = new LaptopModel();
    }

    public function index() {

        // $laptop = $this->laptopModel->findAll();

        $data = [

            'title' => 'Laptop',
            'laptop' => $this->laptopModel->getLaptop()
        ];

        return view('laptops/index', $data);
    }

    public function detail($slug) {

        $data = [
            'title' => 'Laptop Detail',
            'laptop' => $this->laptopModel->getLaptop($slug)
        ];

        return view('laptops/detail', $data);
    }
}
