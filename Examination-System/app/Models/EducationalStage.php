<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalStage extends Model
{
    use HasFactory;

    protected $table = "educational_stages";
    protected  $fillable =['name_ar','name_en','notes'];


    public function grades(){
        return $this->hasMany(Grade::class);
    }


    public function sections(){
        return $this->hasMany(Section::class);
    }




}
