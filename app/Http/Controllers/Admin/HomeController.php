<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Element;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $daerah = Area::count();
        $unsur = Element::count();
        $user = User::count();
        return view('pages.home', compact('daerah', 'unsur', 'user'));
    }
}
