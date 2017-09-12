<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Message extends Model
{

  use Searchable;
  
  protected $guarded = [];

  public function user()
  {
  	return $this->belongsTo(User::class);
  }

  public function responses()
  {
    //return $this->hasMany(Response::class)->orderBy('created_at', 'desc');
    return $this->hasMany(Response::class)->latest();  //Es lo mismo de arriba
  }

  public function getImageAttribute($image)
  {
  	if(!$image || starts_with($image, 'http')){
  		return $image;
  	}

  	return \Storage::disk('public')->url($image);
  }

  public function toSearchableArray()
  {
    $this->load('user');

    return $this->toArray();
  }
}
