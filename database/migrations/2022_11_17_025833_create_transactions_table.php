<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->foreignId('group_id')->constrained();
            $table->bigInteger('amount')->default(0);
            $table->string('description', 255)->nullable();
            $table->string('with', 100)->nullable();
            $table->string('location', 255)->nullable();
            $table->date('alert')->nullable();
            $table->json('images')->nullable();
            $table->boolean('is_count_report')->nullable();
            $table->string('icon')->nullable();
            $table->foreignId('wallet_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
