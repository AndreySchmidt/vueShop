<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $guarded = false;

    public const GENDER_MALE = 1;
    public const GENDER_FEMALE = 2;


    public function getGenders()
    {
        return [self::GENDER_MALE => 'Мужской', self::GENDER_FEMALE => 'Женский'];
    }

    // использую во вьюхе под именем $user->genderTitle
    public function getGenderTitle()
    {
        // подставим свой гендер из данных в массив
        return self::getGenders()[$this->gender];
    }    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
