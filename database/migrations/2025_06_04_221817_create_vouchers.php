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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->string('name', 255);
            $table->string('code', 255);
            $table->integer('quantity');
            $table->timestamp('start_at', precision: 0);
            $table->timestamp('end_at', precision: 0);
            $table->decimal('min_value', total: 10, places : 2);
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
