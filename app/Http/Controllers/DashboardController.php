<?php

namespace App\Http\Controllers;

use App\User;
use App\Listing;
use App\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile($id)
    {
        $user = User::findOrFail($id);
        $listings = User::with('Listings')->find($id);
        return view('dashboard.index')->with([
            'user' => $user,
            'listings' => $listings,
            ]);
    }
}
