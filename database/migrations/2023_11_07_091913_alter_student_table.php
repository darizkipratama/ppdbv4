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
            $table->string('playgroup_before')->nullable()->change();
        });

        Schema::table('programmes', function (Blueprint $table) {
            $table->integer('entrance_fee')->nullable();
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
