<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //use HasFactory;

    protected $guarded = []; //remove guard

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : "profile/freecodecamp.png";
        return $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
