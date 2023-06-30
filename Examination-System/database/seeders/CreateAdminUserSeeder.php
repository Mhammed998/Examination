<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function generateUserUid(){

        $userCode = rand(1,1000);
        $userCode = $userCode . substr(Str::random($userCode), 0 ,3);
        return $userCode;
    }


    public function run(): void
    {
        $user = User::create([
            'full_name_en' => 'Mohammed Hashim',
            'full_name_ar' => 'محمد هاشم',
            'uid' => $this->generateUserUid(),
            'email' => 'admin@gmail.com',
            'status' => true,
            'gender' => 'male',
            'roles' => ['SuperAdmin'],
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'SuperAdmin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
