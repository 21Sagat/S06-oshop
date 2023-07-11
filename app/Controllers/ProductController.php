<?php 

namespace App\Controllers;

use App\Models\Product;

class ProductController extends CoreController
{

    public function list()
    {
        $this->show('product/product_list', [
            'products' => Product::findAll(),
        ]);
    }

    public function add()
    {
        $this->show('product/product_add');
    }

    public function update($id)
    {
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('product/product_update', [
            'product' => Product::find($id)
        ]);
    }

}