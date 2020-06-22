<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone',
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

    protected $dates = [
        'deleted_at'
    ];

    protected $attributes = [ 
        'menuroles' => 'user',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function($user){
            $client_rand_id = mt_rand(100000, 999999);
            $user->profile()->create([
                'user_id'=> $user->id,
                'phone'=> $user->phone,
                'client_id'=> $client_rand_id,
            ]);

            // Mail::to($user->email)->send(new NewUserWelcomeMail());
        });
    }

  public function profile()
  {
    // User has one Profile
    return $this->hasOne(Profile::class);
  }
}
