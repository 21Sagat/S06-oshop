<?php

namespace App\Controllers;

use App\Models\Type;

class TypeController extends CoreController
{

    public function list()
    {
        $this->show('type/type_list', [
            'types' => Type::findAll()
        ]);
    }

    public function add()
    {
        $this->show('type/type_add');
    }
}