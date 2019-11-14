<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index() {
        return view ('welcome');
    }
    public function teacher() {
        return view ('teacher');
    }
    public function student() {
        return view ('student');
    }
    public function gardian() {
        return view ('gardian');
    }
    public function padagog() {
        return view ('padagog');
    }
}
