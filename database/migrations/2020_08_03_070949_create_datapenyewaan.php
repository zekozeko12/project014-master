<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapenyewaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapenyewaan', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nanaCustomer',50);
            $table->string('jenisMotor',50);
            $table->date('tglPenyewaan');
            $table->date('tglPengembalian');
            $table->text('user');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapenyewaan');
    }
}
