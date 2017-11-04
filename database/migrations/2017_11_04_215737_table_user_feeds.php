<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUserFeeds extends Migration {

    /** Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('user_feeds', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('study_id');

            $table->boolean('read')->default(false);

            $table->timestamps();
        });
    }

    /** Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('user_feeds');
    }
}
