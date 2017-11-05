<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFeed extends Model {
    protected $table = "user_feeds";

    public function study() {
        return $this->belongsTo(Study::class, 'study_id');
    }
}
