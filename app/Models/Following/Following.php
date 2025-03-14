<?php

namespace App\Models\Following;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    protected $table = "followings";
    
    protected $fillable = [
        "show_id",
        "user_id",
    ];
    public $timestamps = true;
}
