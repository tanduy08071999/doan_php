<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LichSuMuaCredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lich_Su_Mua_credit', function (Blueprint $table) {
                $table->increments('id');
              $table->Integer('nguoi_choi_id');
              $table->Integer('goi_credit_id');
              $table->Integer('credit');
              $table->Integer('so_tien');
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
        Schema::dropIfExists('Lich_Su_Mua_credit');
    }
}
