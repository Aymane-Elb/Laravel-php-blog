<?php

namespace App\Models\Show;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $table = 'shows';
    protected $fillable = [
        "name",
        "image",
        "description",
        "type",
        "studios",
        "date_aired",
        "status",
        "genre",
        "duration",
        "quality"
    ];
    public $timestamps = true;
}