<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTraitsIcons extends Migration {

    /** Run the migrations.
     * @return void
     */
    public function up() {
        Schema::table('traits', function (Blueprint $table) {
            $table->string('icon')->nullable();
        });
    }

    /** Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::table('traits', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
}
