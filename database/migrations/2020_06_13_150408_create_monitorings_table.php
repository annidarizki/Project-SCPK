<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_periksa');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->enum('olahraga', ['sering', 'jarang', 'tidak']);
            $table->enum('status_gizi', ['kurus', 'normal', 'gemuk', 'obesitas']);
            $table->string('tekanan_darah');
            $table->string('resiko_sakit');
            $table->foreignId('elder_id')->constrained();
            $table->foreignId('companion_id')->constrained();
            $table->foreignId('cadre_id')->constrained();
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
        Schema::dropIfExists('monitorings');
    }
}
