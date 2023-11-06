<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::table('students', function (Blueprint $table) {
            $table->text('history_ofillness')->nullable();
            $table->string('allergic')->nullable();
            $table->string('special_medication')->nullable();
            $table->string('food_allergic')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('hobby')->nullable();
            $table->string('sp_characteristic')->nullable();
            $table->boolean('sp_company')->nullable();
            $table->decimal('playgroup_before', $precision=3, $scale=1)->nullable();
            $table->text('specialnote_school')->nullable();
            $table->text('parent_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
