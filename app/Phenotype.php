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

    public static function retrieveOrCreate($params) {
        $params['name'] = strtoupper( $params['name'] );
        $model = static::where('name', '=', $params['name'])->first();
        if ($model === null) {
            $model = static::create($params);
        }
        return $model;
    }

    public function studies() {
        return $this->hasMany(Study::class, 'trait_id');
    }
}
