<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_notices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->comment('发送者id');
            $table->integer('receiver_id')->comment('接收者id');
            $table->integer('job_id')->comment('通告id');
            $table->string('content')->comment('内容');
            $table->smallInteger('status')->default(0)->comment('状态，0未读 1已读');
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
        Schema::dropIfExists('job_notices');
    }
}
