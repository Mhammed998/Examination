<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    protected $fillable = [
        'full_name_ar',
        'full_name_en',
        'avatar',
        'status',
        'uid',
        'roles',
        'email',
        'password',
    ];


    public function generateUserUid(){

        $userCode = rand(1,1000);
        $userCode = $userCode . substr(Str::random($userCode), 0 ,3);
        return $userCode;
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'roles' => 'array'
    ];



}
