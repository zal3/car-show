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
            $table->string('type');
            $table->string('category');
            $table->string('model');
            $table->integer('sale_price');
            $table->string('number')->nullable()->unique();
            $table->string('chassis_number')->nullable()->unique();
            $table->integer('color')->nullable();
            // <option value="1">احمر</option>
            //                             <option value="2">ابيض</option>
            //                             <option value="3">اسود</option>
            //                             <option value="4">اصفر</option>
            //                             <option value="5">اخضر</option>
            //                             <option value="6">ازرق</option>
            $table->text('note')->nullable();
            $table->string('import_place')->nullable();
            $table->date('import_date')->nullable();
            $table->integer('import_price')->nullable();
            $table->boolean('state')->default(false); // false 0 for not rent, true 1 for rent
            $table->string('image_path')->nullable();
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