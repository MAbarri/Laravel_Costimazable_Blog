<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLogoPhonenumberToSettingsIshttppageToPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('pages', function($table) {
          $table->boolean('isHTMLPage');
        });
      Schema::table('settings', function($table) {
          $table->string('appLogo');
          $table->string('phoneNumber');
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
