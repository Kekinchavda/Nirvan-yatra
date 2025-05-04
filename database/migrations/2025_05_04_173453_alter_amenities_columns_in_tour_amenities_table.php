<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tour_amenities', function (Blueprint $table) {
            $table->longText('included_amenities')->change();
            $table->longText('not_included_amenities')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('tour_amenities', function (Blueprint $table) {
            $table->string('included_amenities', 255)->change();
            $table->string('not_included_amenities', 255)->change();
        });
    }
};
