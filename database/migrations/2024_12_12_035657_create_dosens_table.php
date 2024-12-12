<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('dosens', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nip')->unique();
        $table->string('mata_kuliah');
        $table->timestamps();
    });
}

};
