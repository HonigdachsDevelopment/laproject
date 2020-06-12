<?php

namespace App;

use App\Model\Question;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;


use App\Account;
use App\Channel;

class User extends Authenticatable
{
    use Notifiable;



    public $incrementing = FALSE;

    protected static function boot() {

        parent::boot();
        // static function to bind our model
        static::creating(function ($model) {

            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function hasAnyRoles($roles){
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
        return false;
    }

    public function hasRole($role){

        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    //
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
    //
    public function teams(){
        return $this->belongsToMany(Team::class);
    }



    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function channel(){
        return $this->hasOne(Channel::class);
    }

    public function account(){
        return $this->hasOne(Account::class);
    }




}
