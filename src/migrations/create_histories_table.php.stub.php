<?php
/**************************************************************************
 * Copyright (C) iFeras93, Inc - All Rights Reserved
 *
 *
 * @file        create_history_table.php.stub.php
 * @author      Firas
 * @project     HistoriableModel
 * @date        2/16/2020
 */

//namespace Iferas93\HistoriableModel\migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('historiable');
            $table->string('changed_column');
            $table->text('value_from')->nullable();
            $table->text('value_to')->nullable();
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
        Schema::dropIfExists('histories');
    }
}
