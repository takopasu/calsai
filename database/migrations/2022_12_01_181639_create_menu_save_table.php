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
    Schema::create('menu_save', function (Blueprint $table) {
        //student_idとsubject_idを外部キーに設定
        $table->foreignId('menu_id')->constrained('menus');   //参照先のテーブル名を
        $table->foreignId('save_id')->constrained('saves');    //constrainedに記載
        $table->primary(['menu_id', 'save_id']);  
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_save_');
    }
};