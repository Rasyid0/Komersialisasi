<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCleansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleans', function (Blueprint $table) {
            $table->id();
            $table->char('no_antrian',2)->unique();
            $table->string('nama');
            $table->char('jenis_kelamin',1);
            $table->string('jenis');
            $table->string('no_telepon',12);
            $table->text('alamat')->nullable();
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
        Schema::dropIfExists('cleans');
    }
}
