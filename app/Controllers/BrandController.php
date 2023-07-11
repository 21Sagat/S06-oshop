<?php

namespace App\Controllers;

use App\Models\Brand;

class BrandController extends CoreController
{

    public function list()
    {
        $this->show('brand/brand_list', [
            'brands' => Brand::findAll()
        ]);
    }

    public function add()
    {
        $this->show('brand/brand_add');
    }
}