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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('status')->default('proces');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('jshshir');
            $table->string('phone');
            $table->string('region_id');
            $table->string('district_id');
            $table->string('quarter_id');
            $table->string('street');
            $table->string('privilege');
            $table->string('privilege_file');
            $table->string('fakultet_id');
            $table->string('group_id');
            $table->string('kurs');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
