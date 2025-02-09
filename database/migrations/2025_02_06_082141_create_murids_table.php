<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->bigInteger("id_murid")->nullable(false)->primary();
            $table->string("nama")->nullable(false);
            $table->string("kelas")->nullable(false);
            $table->string("alamat")->nullable(false);
            $table->Integer("tahun_masuk")->nullable(false);
            $table->string("nama_wali")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murids');
    }
};
