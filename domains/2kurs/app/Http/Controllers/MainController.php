<?php

namespace App\Http\Controllers;

use App\Models\UserLk;
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
        $user_= new UserLk();
        return view('cabinet',['user'=> $user_->all()]);
    }

    public function cabinet_lk(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:5|max:100',
            'password' => 'required|min:2|max:100'
        ]);

        $rev = new UserLk();
        $rev->email=$request->input('email');
        $rev->password=$request->input('password');

        $rev->save();

        return redirect()->route('lk');
    }

}
