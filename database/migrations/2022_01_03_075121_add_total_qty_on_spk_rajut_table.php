<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalQtyOnSpkRajutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spk_rajuts', function (Blueprint $table) {
            $table->decimal('total_qty',18,2)->default(0)->after('customer_id');           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spk_rajut', function (Blueprint $table) {
            //
        });
    }
}
