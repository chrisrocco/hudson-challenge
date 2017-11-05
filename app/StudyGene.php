<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyGene extends Model {

    public $timestamps = false;

    protected $fillable = [
        'odds_ratio',
        'allele',
    ];

    protected $table = "studies_genes";

    public function study() {
        return $this->belongsTo(Study::class, 'study_id');
    }
}
