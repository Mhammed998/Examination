<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stages\StageRequest;
use App\Models\EducationalStage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $stages = EducationalStage::select('id', 'name_'.app()->getLocale() . '  as name' )->get();

        return view('backend.stages.index', ['stages'=>$stages]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.stages.create');
    }


    public function store(StageRequest $request)
    {
        $newStage = new EducationalStage;
        $newStage->name_en = $request->name_en;
        $newStage->name_ar = $request->name_ar;
        $newStage->notes = $request->notes;
        $newStage->save();

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('educational-stages.index');
    }


    public function show(string $id)
    {
        $stage = EducationalStage::findOrFail($id);
        return view('backend.stages.show' , ['stage'=> $stage]);
    }



    public function edit($id)
    {
        $stage = EducationalStage::findOrFail($id);
        return view('backend.stages.edit' , ['stage'=> $stage]);
    }



    public function update(StageRequest $request , $id)
    {
        $stage = EducationalStage::findOrFail($id);

        $stage->update($request->all());

        toastr()->success('Data has been updated successfully!');
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stage = EducationalStage::findOrFail($id);
        $stage->delete();
        return redirect()->route('educational-stages.index');
    }
}
