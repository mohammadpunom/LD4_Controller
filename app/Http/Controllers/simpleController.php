<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simpleController extends Controller
{
    public function mover() {
        return view ('dhl');
    }
}
