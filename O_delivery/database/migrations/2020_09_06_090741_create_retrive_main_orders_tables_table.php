<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetriveMainOrdersTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retrive_main_orders_tables', function (Blueprint $table) {
            $table->string('orderNo');
            $table->string('itemNo');
            $table->string('description');
            $table->string('customerName');
            $table->string('customerAddress');
            $table->string('supplierName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retrive_main_orders_tables');
    }
}
