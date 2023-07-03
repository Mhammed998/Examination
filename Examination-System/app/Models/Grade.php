<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = "grades";
    protected  $fillable =['name_ar','name_en','stage_id'];


    public function educational_stage(){
        return $this->belongsTo(EducationalStage::class);
    }



    public function sections(){
        return $this->hasMany(Section::class);
    }


}
