<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class examController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = DB::table('courses')->get();

        return view('backend.exams.create' , ['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'exam_name' => 'required|string|min:5',
            'course_id' => 'required|integer',
        ]);

        $newExam = new Exam;
        $newExam->exam_name = $request->exam_name;
        $newExam->exam_code = $newExam->generateExamCode();
        $newExam->course_id = $request->course_id;
        $newExam->save();

        return  redirect()->route('questions.create');

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
