<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('makuls', function (Blueprint $table) {
        $table->id();
        $table->string('kode');
        $table->string('nama_makul');
        $table->integer('sks');
        $table->timestamps();
    });
}

};
