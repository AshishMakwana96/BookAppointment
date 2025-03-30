<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->datetime('start_time');

            $table->datetime('finish_time');

            $table->decimal('price', 15, 2)->nullable();

            $table->longText('comments')->nullable();

            $table->text('name')->nullable();

            $table->text('email')->nullable();

            $table->text('phone')->nullable();

            $table->boolean('status')->default(0);

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
