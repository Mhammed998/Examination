<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $table = "courses";
    protected  $fillable =['name_ar','name_en','status','notes'];



    //Relationships below
    public function educational_stage(){
        return $this->belongsTo(EducationalStage::class);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }






}
