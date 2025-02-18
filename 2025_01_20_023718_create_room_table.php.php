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
        Schema::create(table: 'rooms',callback:function (Blueprint $table):void {
            $table->id();
            $table->string(column:'nama_kamar')->nullable();
            $table->string(column:'gambar')->nullable();
            $table->longText(column:'deskripsi')->nullable();
            $table->string(column:'harga')->nullable();
            $table->string(column:'wifi')->default(value:'ya');
            $table->string(column:'type_kamar')->nullable();
            $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
