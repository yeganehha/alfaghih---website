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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->nullable()->unsigned();
            $table->foreign('parent_id')->references('id')->on('menus')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('link')->nullable()->default('#');
            $table->json('route')->nullable();
            $table->string('type')->nullable();
            $table->string('icon')->nullable();
            $table->integer('order')->default(0);
            $table->json('customData')->nullable();
            $table->boolean('isBreaker')->default(false);
            $table->boolean('isActive')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
