<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoriesMethod()
    {
        $title = "Экатегории товаров";
        $description='Данная страница отображает категории товаров';
        return view('categories.pages.categories', ['title' => $title, 'description' => $description]);
    }
}
