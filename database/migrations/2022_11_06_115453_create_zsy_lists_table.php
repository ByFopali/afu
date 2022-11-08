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
        Schema::create('zsy_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('zsy_type_id');
            $table->text('image')->nullable();
            $table->timestamps();

            $table->index('zsy_type_id', 'zsy_type_zsy_list_idx');
            $table->foreign('zsy_type_id', 'zsy_type_zsy_list_fk')->on('zsy_types')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zsy_lists');
    }
};
