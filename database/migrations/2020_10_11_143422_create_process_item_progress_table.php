<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessItemProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_item_progress', function (Blueprint $table) {
            $table->id();
            $table->integer('process_item_id');
            $table->string('remark');
            $table->integer('created_by_user_id');
            $table->timestampsTz(); //time stamp with timezone in UTC
            $table->integer('status_id'); // ref process_item_statuses
            $table->softDeletesTz('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('process_item_progress');
    }
}
