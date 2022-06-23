<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSurnameToLastnameInGledalacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gledalacs', function (Blueprint $table) {
            $table -> renameColumn('surname','last_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gledalacs', function (Blueprint $table) {
            $table -> renameColumn('last_nmae','surname');
        });
    }
}
