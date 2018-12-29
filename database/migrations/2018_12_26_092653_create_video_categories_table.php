<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_categories', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->integer('pid')->default(0)->comment('父id');
            $table->string('name')->comment('分类名称');
            $table->string('description')->nullable()->comment('描述');
            $table->integer('sort')->default(0)->comment('排序，数值越大越前');
            $table->smallInteger('display')->default(1)->comment('状态，0不显示，1显示');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_categories');
    }
}
