<?php

namespace App\Modules\ExampleModule\Http\Controllers;

use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function index()
    {
        return view('examplemodule::example');
    }
}
