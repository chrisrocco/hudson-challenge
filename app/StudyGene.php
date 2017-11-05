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

    public static function ratioToScale ($odds_ratio) {
        $odds_ratio = max(0.1, min(10, $odds_ratio)); //clamp between 0.1 and 10
        return log10($odds_ratio);
    }

    public static function ratioToEnum($odds_ratio) {
        $scale = self::ratioToScale($odds_ratio);
        if ($scale <= -0.33) {  return 0;   }
        if ($scale >= 0.33) {  return  2;   }
        return 1;
    }

    public function study() {
        return $this->belongsTo(Study::class, 'study_id');
    }

    public function getOddsScaleAttribute() {
        $ratio = $this->odds_ratio;
        return self::ratioToScale($ratio);
    }
}
