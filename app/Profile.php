<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

//  Profile Belongs to one user
  public function user()
  {
    return $this->belongsTo(User::class);
  }

// function to update profile image automatically
  public function profileImage()
  {
  	$imagePath=($this->profileImage) ? $this->profileImage: 'profile/3RMkbWXjgVkadmlGzOmZ0wWmacd5xjrEJEx4znNw.jpeg';
  	return '/storage/'.$imagePath;
  }
}
