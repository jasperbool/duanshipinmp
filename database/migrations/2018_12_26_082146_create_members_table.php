<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->comment('用户名');
            $table->string('password')->comment('密码');
            $table->string('email')->nullable()->comment('邮箱');
            $table->string('phone')->nullable()->comment('手机号码');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('alias')->nullable()->comment('昵称');
            $table->smallInteger('type')->default(1)->comment('类别，1艺人，2运营');
            $table->string('wx_openid')->nullable()->comment('微信用户唯一标识');
            $table->bigInteger('last_logined_ip')->default(0)->comment('最后登录ip');
            $table->timestamp('last_logined_at')->nullable()->comment('最后登录时间');
            $table->integer('logined_counts')->default(0)->comment('登录次数');
            $table->smallInteger('status')->default(1)->comment('状态,0为禁用,1为启用');
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
        Schema::dropIfExists('members');
    }
}
