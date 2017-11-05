<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGene extends Model {

    public $timestamps = false;

    protected $table = "users_genes";

    protected $fillable = [
        "user_id",
        "gene_id",
        "allele"
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
