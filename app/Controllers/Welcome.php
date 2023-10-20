<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function index()
    {
        return view('welcome');
    }

    public function test()
    {
        echo "testaaaaaaaaaaaaaa";
    }
}
