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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stay_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number', 30);
            $table->date('arrive_date');
            $table->date('leaving_date');
            $table->unsignedSmallInteger('number_adults')->default(1);
            $table->unsignedSmallInteger('number_kids')->default(0);
            $table->text('special_wish')->nullable();
            $table->string('status')->default('pending');
            $table->unsignedInteger('total_price')->default(0);
            $table->timestamps();

            $table->index(['arrive_date', 'leaving_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};