<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){

        //$role = Role::create(['name' => 'admin']);
        $role = Role::find(1);

        $permissions = Permission::all();

        $role->syncPermissions($permissions);

        return view('dashboard.index');
    }
}
