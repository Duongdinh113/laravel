<?php

use App\Models\Categoris;
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
        Schema::create('categoris', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('describe')->nullable();
            $table->string('status')->default(value:Categoris::STATUS_DRAFT);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoris');
    }
};
