<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('doctors', function (Blueprint $table) {
      $table->id();
      $table->string('fname');
      $table->string('lname');
      $table->string('specialist_in');
      $table->time('available_from');
      $table->time('available_to');
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
    Schema::dropIfExists('doctors');
  }
}
