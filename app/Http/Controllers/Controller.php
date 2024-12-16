<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function main()
    {
        return view('index');
    }
}
