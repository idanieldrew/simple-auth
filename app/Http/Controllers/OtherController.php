<?php

namespace App\Http\Controllers;

class OtherController extends Controller
{
    public function About()
    {
        return view('layouts.about');
    }

    public function Info()
    {
        return view('layouts.info');
    }

    public function Products()
    {
        return view('layouts.products');
    }

    public function Category()
{
    return view('layouts.category');
}

public function Test()
{
    return view('layouts.test');
}
}