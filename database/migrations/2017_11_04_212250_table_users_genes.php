<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsersGenes extends Migration {

    /** Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('users_genes', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('gene_id');

            $table->char('allele');
        });
    }

    /** Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users_genes');
    }
}
