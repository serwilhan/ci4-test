<?php

namespace App\Models;

use CodeIgniter\Model;

class LaptopModel extends Model {

    protected $table = 'laptop';
    protected $useTimestamps = true;

    public function getLaptop($slug = false) {

        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
