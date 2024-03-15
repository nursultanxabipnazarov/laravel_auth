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

            $table->string('lastname');
            $table->string('firstname');
            $table->string('jshshir');
            $table->string('phone');
            $table->string('regions');
            $table->string('districts');
            $table->string('quarters');
            $table->string('street');
            $table->string('privilege');
            $table->string('privilege_file');
            $table->string('fakultet');
            $table->string('group');
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
