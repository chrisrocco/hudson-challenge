<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableStudiesGenes extends Migration {

    /** Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('studies_genes', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('study_id');
            $table->unsignedInteger('gene_id');

            $table->float('odds_ratio');
            $table->char('allele');

        });
    }

    /** Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('studies_genes');
    }
}
