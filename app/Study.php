<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model {

    public $timestamps = false;

    protected $table = "studies";

    protected $fillable = [
        'name',
        'pmc_id',
        'trait_id',
        'date_added',
        'date_published',
    ];

    public static function retrieveOrCreate($params) {
        $model = static::where('pmc_id', '=', $params['pmc_id'])->first();
        if ($model === null) {
            $model = static::create($params);
        }
        return $model;
    }

    public function genes() {
        return $this->belongsToMany(Gene::class, 'studies_genes', 'study_id', 'gene_id');
    }

    public function phenotype() {
        return $this->belongsTo(Phenotype::class, 'trait_id');
    }

}
