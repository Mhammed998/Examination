<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{

    function __construct()
    {
//        $this->middleware('permission:user-list', ['only' => ['index']]);
//        $this->middleware('permission:user-create', ['only' => ['create','save']]);
        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-delete', ['only' => ['delete']]);
    }


    public function index(){
         $users  = User::latest()->paginate(10);
         return view('backend.users.index' , ['users' => $users]);
    }


    public function create(){
        $roles = Role::pluck('name','name')->all();
        return view('backend.users.create',compact('roles'));
    }

    public function storeStudent(){

    }



    public function createTeacher(){

    }


    public function storeTeacher(){

    }



    public function createAdmin(){

    }

    public function storeAdmin(){

    }



    public function show(){

    }



    public function store(Request $request){

    }



    public function edit(){


    }
}
