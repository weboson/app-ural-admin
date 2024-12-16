<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalogMethod(Request $request)
    {
        $name= $request->input('name');
        $title = 'Страница каталога';
        $description = 'На данной странице - будут выводится каталог товаров';
        return view('catalog.pages.catalogList', ['name' => $name, 'title' => $title, 'description' => $description]);
    }
}
