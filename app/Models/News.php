<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
//    use softDeletes;

    public $timestamps = false;

//    public function comments()
//    {
//        return $this->hasMany(Comments::class);
//    }

}
