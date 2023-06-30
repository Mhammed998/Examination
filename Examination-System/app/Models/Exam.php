<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Exam extends Model
{
    use HasFactory;

    protected $fillable =[];


    // generate exam code

    public function generateExamCode(){

        $examCode = rand(1,1000);
        $examCode = $examCode . substr(Str::random($examCode), 0 ,3);
        return $examCode;
    }

}
