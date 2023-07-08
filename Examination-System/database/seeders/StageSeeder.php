<?php

namespace Database\Seeders;

use App\Models\EducationalStage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $stages = [
            [
                'name_en' => 'primary school',
                'name_ar' => 'المرحلة الابتدائية'
            ],
            [
                'name_en' => 'mid school',
                'name_ar' => 'المرحلة الاعدادية'
            ],
            [
                'name_en' => 'high school',
                'name_ar' => 'المرحلة الثانوية'
            ],
            [
                'name_en' => 'college',
                'name_ar' => ' المرحلة الجامعية'
            ],
            [
                'name_en' => 'academy',
                'name_ar' => 'أكاديمي '
            ]
        ];

             foreach ($stages as $stage) {
                 EducationalStage::create(
                     [
                         'name_en' => $stage['name_en'] ,
                         'name_ar' => $stage['name_ar'] ,
                 ]);
             }


    }
}
