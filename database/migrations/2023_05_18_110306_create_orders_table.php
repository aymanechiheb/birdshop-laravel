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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_id')->unsigned()->nullable();
            $table->foreign('User_id')->references('id')->on('Users')->onDelete('cascade');
            $table->json('Order');
            $table->unsignedDecimal('Total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders',function(Blueprint $table){
            $table->dropConstrainedForeignId('User_id');
        });

        Schema::dropIfExists('orders');
    }
};
