<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;


    protected $table = "sections";
    protected  $fillable =['name_ar','name_en','grade_id','stage_id'];


    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function educational_stage(){
        return $this->belongsTo(EducationalStage::class);
    }



}
