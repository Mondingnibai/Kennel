<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurBreedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function maleIndex() {
        return view('public.male-dog');
    }

    public function femaleIndex() {
        return view('public.female-dog');
    }
}
