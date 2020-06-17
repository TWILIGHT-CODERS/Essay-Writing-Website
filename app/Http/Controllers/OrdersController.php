<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }


    public function completed()
    {
        // $roles = DB::table('roles')
        // ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        // ->select('roles.*', 'role_hierarchy.hierarchy')
        // ->orderBy('hierarchy', 'asc')
        // ->get();
        return view('dashboard.orders.completed');
    }
    public function inprogress()
    {
        // $roles = DB::table('roles')
        // ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        // ->select('roles.*', 'role_hierarchy.hierarchy')
        // ->orderBy('hierarchy', 'asc')
        // ->get();
        return view('dashboard.orders.inprogress');
    }


    public function overdue()
    {
        // $roles = DB::table('roles')
        // ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        // ->select('roles.*', 'role_hierarchy.hierarchy')
        // ->orderBy('hierarchy', 'asc')
        // ->get();
        return view('dashboard.orders.overdue');
    }


    public function cancelled()
    {
        // $roles = DB::table('roles')
        // ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        // ->select('roles.*', 'role_hierarchy.hierarchy')
        // ->orderBy('hierarchy', 'asc')
        // ->get();
        return view('dashboard.orders.cancelled');
    }


    public function charged_back()
    {
        // $roles = DB::table('roles')
        // ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        // ->select('roles.*', 'role_hierarchy.hierarchy')
        // ->orderBy('hierarchy', 'asc')
        // ->get();
        return view('dashboard.orders.charged-back');
    }


    public function disputes()
    {
        // $roles = DB::table('roles')
        // ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        // ->select('roles.*', 'role_hierarchy.hierarchy')
        // ->orderBy('hierarchy', 'asc')
        // ->get();
        return view('dashboard.orders.disputes');
    }

}
