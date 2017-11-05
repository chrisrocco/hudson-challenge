<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phenotype extends Model {

    public $timestamps = false;

    protected $table = "traits";

    protected $fillable = [
        'name',
        'description',
    ];

    public function studies() {
        return $this->hasMany(Study::class, 'trait_id');
    }
}
