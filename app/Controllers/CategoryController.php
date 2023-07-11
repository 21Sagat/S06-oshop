<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends CoreController
{

    public function list()
    {

        $this->show('category/category_list', [
            'categories' => Category::findAll()
        ]);
    }

    public function add()
    {
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('category/category_add');
    }

    public function update($id)
    {
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('category/category_update', [
            'category' => Category::find($id)
        ]);
    }
}