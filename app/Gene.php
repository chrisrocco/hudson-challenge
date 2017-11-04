<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gene extends Model {
    protected $table = "genes";

    protected $fillable = [
        'name',
        'trait',
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'users_genes', 'gene_id', 'user_id');
    }

    public function studies() {
        return $this->belongsToMany(Study::class, 'studies_genes', 'gene_id', 'study_id');
    }
}
