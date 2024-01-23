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
        Schema::create('data_spt', function (Blueprint $table) {
            $table->id();
            $table->string('no', 100);
            $table->string('tglspt', 100);
            $table->string('judul', 100);
            $table->string('tglperjalanan', 100);
            $table->string('nama1', 100)->nullable();
            $table->string('nama2', 100);
            $table->string('nama3', 100);
            $table->string('nama4', 100);
            $table->string('nama5', 100);
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
        Schema::dropIfExists('data_spt');
    }
};
