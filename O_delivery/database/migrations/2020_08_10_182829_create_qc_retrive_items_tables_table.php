<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQcRetriveItemsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qc_retrive_items_tables', function (Blueprint $table) {
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
        Schema::dropIfExists('qc_retrive_items_tables');
    }
}
