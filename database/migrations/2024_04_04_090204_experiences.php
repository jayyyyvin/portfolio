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
        Schema::create('experiences', function (Blueprint $table) {
                $table->id();
                $table->string('work_experience');
                $table->string('date_hire');
                $table->string('address');
                $table->string('description');
                $table->timestamps();
  
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