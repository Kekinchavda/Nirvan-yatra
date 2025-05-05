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
        Schema::table('tours', function (Blueprint $table) {
            $table->string('from_to')->after('feature_image'); // For frontend display
            $table->string('pickup_drop_location')->after('from_to');
            $table->longText('other_charges')->nullable()->after('pickup_drop_location'); // JSON encoded
            $table->longText('things_to_carry')->nullable()->after('other_charges');      // JSON encoded
            $table->longText('terms_conditions')->nullable()->after('things_to_carry');
            $table->longText('note')->after('terms_conditions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn([
                'from_to',
                'pickup_drop_location',
                'other_charges',
                'things_to_carry',
                'terms_conditions',
                'note',
            ]);
        });
    }
};
