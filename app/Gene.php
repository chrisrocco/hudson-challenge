<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gene extends Model {
    protected $table = "genes";

    protected $fillable = [
        'name',
        'trait',
    ];
}
