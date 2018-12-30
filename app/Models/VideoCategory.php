<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\VideoCategory
 *
 * @property int $id 主键
 * @property int $pid 父id
 * @property string $name 分类名称
 * @property string|null $description 描述
 * @property int $sort 排序，数值越大越前
 * @property int $display 状态，0不显示，1显示
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\VideoCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory whereDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\VideoCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\VideoCategory withoutTrashed()
 * @mixin \Eloquent
 */
class VideoCategory extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
