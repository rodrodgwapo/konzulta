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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->integer('module_parent_id');
            $table->char('child_cd', 4);
            $table->string('child_name');
            $table->boolean('has_sub_child');
            $table->integer('sub_child_id');
            $table->boolean('is_visible');
            $table->string('icon');
            $table->boolean('has_access');
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
        Schema::dropIfExists('children');
    }
};
