<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->unsignedBigInteger('tour_type_id')->after('id'); // or after any column you want
            $table->foreign('tour_type_id')->references('id')->on('tour_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropForeign(['tour_type_id']);
            $table->dropColumn('tour_type_id');
        });
    }
};
