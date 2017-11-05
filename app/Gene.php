<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gene extends Model {

    public $timestamps = false;

    protected $table = "genes";

    protected $fillable = [
        'name',
    ];

    public static function retrieveOrCreate($params) {
        $gene = Gene::where('name', '=', $params['name'])->first();
        if ($gene === null) {
            $gene = Gene::create($params);
        }
        return $gene;
    }

    public function users() {
        return $this->belongsToMany(User::class, 'users_genes', 'gene_id', 'user_id');
    }

    public function studies() {
        return $this->belongsToMany(Study::class, 'studies_genes', 'gene_id', 'study_id');
    }

    public function traits() {
        //TODO
    }
}
