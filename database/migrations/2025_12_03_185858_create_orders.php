<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');

        // Total harga keseluruhan
        $table->decimal('total_price', 12, 2)->default(0);

        // Status order
        $table->enum('status', ['Tertunda', 'Diproses', 'Selesai', 'Dibatalkan'])
              ->default('Tertunda');

        $table->timestamps();

        // Relation
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
