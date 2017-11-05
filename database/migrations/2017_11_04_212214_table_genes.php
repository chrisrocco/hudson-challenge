<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableGenes extends Migration {

    /** Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('genes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
        });
    }

    /** Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists("genes");
    }
}
