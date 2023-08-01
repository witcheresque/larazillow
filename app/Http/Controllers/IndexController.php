<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {

       // dd(Auth::user());
    //    dd(Auth::check());

        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Laravel!'
            ]

        );

    }

    public function show()
    {

        return inertia('Index/Show');
    }
}
