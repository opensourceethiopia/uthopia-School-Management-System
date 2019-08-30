<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudnetClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studnet_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("grade");
            $table->integer("section");
            $table->integer("room_number")->unique();
            $table->integer("home_room_teacher_id");
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
        Schema::dropIfExists('studnet_classes');
    }
}
