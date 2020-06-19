<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMessagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user');
    }

    /**
     * Show the users list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $you = auth()->user();
        return view('dashboard.user.messages', compact('you'));
    }
}
