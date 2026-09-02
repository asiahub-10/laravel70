<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        // $roles = Role::all();    // Assending
        $roles = Role::latest()->get();     // Desending
        // dd($roles);
        // return view('admin.role.manage', compact('roles'));
        return view('admin.role.manage', ['roles' => $roles]);
    }
    public function create()
    {
        return view('admin.role.create');
    }
    public function edit()
    {
        return view('admin.role.update');
    }
}
