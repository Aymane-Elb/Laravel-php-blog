<?php

namespace App\Models\comment;

use Illuminate\Database\Eloquent\Model;


class comment extends Model
{
    protected $table = "comments";
    
    protected $fillable = [
        "show_id",
        "user_name",
        "image",
        "comment",
    ];
    public $timestamps = true;
}
