<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_actions', function (Blueprint $table) {
            $table->id();
            $table->String('action')->nullable();
            $table->String('ip')->nullable();
            $table->String('city')->nullable();
            $table->String('country')->nullable();
            $table->String('navigateur')->nullable();
            $table->String('more')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('audit_actions');
    }
}
