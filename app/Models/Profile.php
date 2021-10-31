<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getProfileImage()
    {
        // $image = ($this->image) ? $this->image : "profile/default.png";
        // return  "/storage/$image" ;
        return ($this->image) ? $this->image : "profile/default.png";
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
