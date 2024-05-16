<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers_translations', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('experience');
            $table->text('location');
            $table->text('description');
            $table->bigInteger('career_id')->unsigned();
            $table->string('locale')->index()->nullable();
            $table->unique(['career_id', 'locale']);
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
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
        Schema::dropIfExists('careers_translations');
    }
};
