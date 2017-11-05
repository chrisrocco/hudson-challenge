<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyGene extends Model {

    public $timestamps = false;

    protected $fillable = [
        'odds_ratio',
        'allele',
    ];

    protected $appends = [
        'odds_scale'
    ];

    protected $table = "studies_genes";

    public function study() {
        return $this->belongsTo(Study::class, 'study_id');
    }

    public function getOddsScaleAttribute() {
        $ratio = $this->odds_ratio;
        $ratio = max(0.1, min(10, $ratio)); //clamp between 0.1 and 10
        return log10($ratio);
    }
}
