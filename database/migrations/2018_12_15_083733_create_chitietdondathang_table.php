<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdondathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdondathangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sanpham_id');
            $table->integer('dondathang_id');
            $table->integer('soluong');
            $table->integer('tongtien');
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
        Schema::dropIfExists('chitietdondathang');
    }
}
