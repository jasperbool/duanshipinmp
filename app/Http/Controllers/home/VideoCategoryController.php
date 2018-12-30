<?php

namespace App\Http\Controllers\home;

use App\Models\VideoCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class VideoCategoryController extends BaseController
{

    protected $videoCategoryService;

    /**
     * 获取所有的分类
     */
    public function all(Request $request)
    {
        $categories = VideoCategory::orderBy('sort', 'desc')->orderBy('id', 'desc')->get();
        return $this->success($categories);
    }

}
