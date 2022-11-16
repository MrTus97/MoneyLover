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
        Schema::create('groups', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 100);
            $table->string('description', 255)->nullable();
            $table->string('icon')->nullable();
            // 0 : Income, 1 Outcome, 2: own
            $table->unsignedTinyInteger('type')->default(0);
            $table->foreignId('wallet_id')->constrained();
            $table->foreignId('parrent_id')->constrained('groups')->nullable();
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
        Schema::dropIfExists('groups');
    }
};
