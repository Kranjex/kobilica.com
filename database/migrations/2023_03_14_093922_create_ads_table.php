<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
//            $table->foreignId('tags')->constrained();
            $table->string('tags'); // JSON array
//            $table->foreignId('image_id')->constrained()->onDelete('cascade');
            $table->string('image_id'); // JSON array
            $table->string('title');
            $table->longText('description');
            $table->timestamps('modified_at');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
