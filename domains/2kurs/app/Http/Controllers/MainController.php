<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main() {
        return view('main');
    }

    public function about() {
        return view('about');
    }

    public function cabinet() {
        return view('cabinet');
    }

    public function cabinet_lk(Request $request) {
        dd($request);
    }
}
