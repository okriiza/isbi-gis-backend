<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Area;
use App\Models\Element;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $daerah = Area::count();
        $unsur = Element::count();
        $user = User::count();
        return view('pages.home', compact('daerah', 'unsur', 'user'));
    }
    public function activityLog()
    {
        $activity = Activity::with('user')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.activity', compact('activity'));
    }
}
