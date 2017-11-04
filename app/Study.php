<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model {

    protected $table = "studies";

    protected $fillable = [
        'name',
        'pmc_id',
        'date_added',
        'date_published',
    ];

}
