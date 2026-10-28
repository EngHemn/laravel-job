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
        Schema::create('job_list', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('title');
            $table->string('company');
            $table->string('salary');
            $table->string('date');
            $table->timestamps(); // Add this line

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
