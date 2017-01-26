<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixSearchesCountToPopularSearchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('popular_searches', function (Blueprint $settings) {
          $settings->dropColumn('popular_searches');
        });
        Schema::table('popular_searches', function($table) {
          $table->integer('numberOfSearches')->default(0);;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
