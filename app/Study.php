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

    public function genes() {
        return $this->belongsToMany(Gene::class, 'studies_genes', 'study_id', 'gene_id');
    }

    public function phenotype() {
        return $this->belongsTo(Phenotype::class, 'trait_id');
    }

}
