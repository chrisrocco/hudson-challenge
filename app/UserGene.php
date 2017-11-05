<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGene extends Model {

    public $timestamps = false;

    protected $table = "users_genes";
}
