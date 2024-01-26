<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'cars' => Car::all(),
            'users' => User::all()
        ]);
    }

    public function give_admin(User $user) {
        User::where('id', $user->id)->update(array('is_admin' => 1));

        return redirect('/admin');
    }

    public function take_admin(User $user) {
        User::where('id', $user->id)->update(array('is_admin' => 0));

        return redirect('/admin');
    }
}
