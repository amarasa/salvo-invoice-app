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
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('builder_id')->unsigned()->index();
            $table->foreign('builder_id')->references('id')->on('builders')->onDelete('cascade');
            $table->text('job_address');
            $table->text('subdivision');
            $table->text('date');
            $table->enum('status', [
                'unpaid',
                'paid'
            ])->default('unpaid');
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
        Schema::dropIfExists('homes');
    }
};
