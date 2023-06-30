<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    // php artisan db:seed --class=PermissionTableSeeder
    // php artisan db:seed --class=CreateAdminUserSeeder



    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'department-list',
            'department-create',
            'department-edit',
            'department-delete',

            'course-list',
            'course-create',
            'course-edit',
            'course-delete',

            'groups-list',
            'groups-create',
            'groups-edit',
            'groups-delete',


            'exam-list',
            'exam-create',
            'exam-edit',
            'exam-delete',



        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
