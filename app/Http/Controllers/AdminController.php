<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function adminMethod(Request $request)

    {
        $title = 'Admin Panel';
        $description = 'Данная страница предназначенна для администрирования данного приложения';
        $name = $request->input('name');

        return view('admin.pages.admin', ['title'=>$title, 'description' => $description, 'name' => $name]);
    }
}
