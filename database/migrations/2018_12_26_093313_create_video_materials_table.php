<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_materials', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->integer('category_id')->comment('分类id');
            $table->string('title')->comment('标题');
            $table->text('description')->nullable()->comment('描述');
            $table->string('url')->nullable()->comment('视频地址');
            $table->string('author')->nullable()->comment('作者');
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
        Schema::dropIfExists('video_materials');
    }
}
