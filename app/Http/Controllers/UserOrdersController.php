<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user');
    }


    public function index()
    {
        // $roles = DB::table('roles')
        // ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        // ->select('roles.*', 'role_hierarchy.hierarchy')
        // ->orderBy('hierarchy', 'asc')
        // ->get();
        return view('dashboard.user.new-order');
    }


    public function orders()
    {
        // $roles = DB::table('roles')
        // ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        // ->select('roles.*', 'role_hierarchy.hierarchy')
        // ->orderBy('hierarchy', 'asc')
        // ->get();
        return view('dashboard.user.orders');
    }

}
