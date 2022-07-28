<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('home_id')->unsigned()->index();
            $table->foreign('home_id')->references('id')->on('homes')->onDelete('cascade');
            $table->text('service_detail');
            $table->enum('service_type', [
                'Each',
                'Per Thousand',
                'Sq Feet'
            ]);
            $table->decimal('cost', 7, 2);
            $table->integer('quantity');
            $table->decimal('total', 7, 2);
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
        Schema::dropIfExists('services');
    }
};
