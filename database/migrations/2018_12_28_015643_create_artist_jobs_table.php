<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('名称');
            $table->integer('member_id')->comment('艺人id');
            $table->timestamp('completed_at')->comment('完成时间');
            $table->timestamp('place')->nullable()->comment('任务地点');
            $table->text('video_urls')->nullable()->comment('通告视频');
            $table->text('image_urls')->nullable()->comment('通告图片');
            $table->text('content')->nullable()->comment('活动内容');
            $table->smallInteger('type')->default(0)->comment('类型，0视频拍摄，1商业活动');
            $table->smallInteger('status')->default(0)->comment('是否完成，0待完成1已完成');
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
        Schema::dropIfExists('artist_jobs');
    }
}
