<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('texte');
            $table->dateTime('datetime')->default(DB::raw('CURRENT_TIMESTAMP')); 
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedInteger('commu_id');
            $table->foreign('commu_id')->references('id')->on('communautes');
            
            $table->unsignedInteger('channel_id');
            $table->foreign('channel_id')->references('id')->on('channels');
          
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
        Schema::dropIfExists('messages');
    }
}
