<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Models\Member
 *
 * @property int $id
 * @property string $username 用户名
 * @property string $password 密码
 * @property string|null $email 邮箱
 * @property string|null $phone 手机号码
 * @property string|null $avatar 头像
 * @property string|null $alias 昵称
 * @property int $type 类别，1艺人，2运营
 * @property string|null $wx_openid 微信用户唯一标识
 * @property int $last_logined_ip 最后登录ip
 * @property string|null $last_logined_at 最后登录时间
 * @property int $logined_counts 登录次数
 * @property int $status 状态,0为禁用,1为启用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereLastLoginedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereLastLoginedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereLoginedCounts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Member whereWxOpenid($value)
 * @mixin \Eloquent
 */
class Member extends Authenticatable implements JWTSubject
{

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
