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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('type');
            $table->string('category');
            $table->string('model');
            $table->integer('sale_price')->nullable();
            $table->string('number')->nullable()->unique();
            $table->string('chassis_number')->nullable()->unique();
            $table->string('color')->nullable();
            $table->text('note')->nullable();
            $table->string('import_place')->nullable();
            $table->date('import_date')->nullable();
            $table->integer('import_price')->nullable();
            $table->boolean('state')->default(true); // false for not available, true for available
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};