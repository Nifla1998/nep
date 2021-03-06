<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessItemStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_item_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status_title');
            $table->timestampsTz(); //time stamp with timezone in UTC
            $table->tinyInteger('status'); //pending, processing,, pending-prerequisite, approved, rejected, cancelled
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
        Schema::dropIfExists('process_item_statuses');
    }
}
