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
        Schema::create('voucher_rule_map', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voucher_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('voucher_rule_id')
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_rule_map');
    }
};
