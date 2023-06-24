<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('backend.departments.index' , ['departments' => $departments ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {        return view('backend.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'department_name_en' => 'required|string|min:4' ,
            'department_desc_en' => 'required|string|min:4' ,
            'department_name_ar' => 'required|string|min:4' ,
            'department_desc_ar' => 'required|string|min:4' ,
            'status' => 'required'
        ]);


        $newDepartment = new Department;
        $newDepartment->department_name_en = $request->department_name_en ;
        $newDepartment->department_name_ar = $request->department_name_ar ;
        $newDepartment->department_desc_en = $request->department_desc_en ;
        $newDepartment->department_desc_ar = $request->department_desc_ar ;
        $newDepartment->status = $request->status ;

        $newDepartment->save();


        return redirect()->route('departments.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
