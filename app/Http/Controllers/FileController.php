<?php

namespace App\Http\Controllers;

use App\Helpers\Api\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class FileController extends BaseController
{
    use ApiResponse;

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image_file')) {
            $manager = new ImageManager();
            $original_file = $request->image_file;
            $uploadsPath = generateUploadsPath($request->input('category'));
            $original_ext = $original_file->extension();
            $filename = date('YmdHis').'.'.$original_ext;
            $path = public_path('uploads/'.$uploadsPath.$filename);
            Storage::disk('uploads')->makeDirectory($uploadsPath);
            $image = $manager->make($original_file->getRealPath())->save($path);

            if(!$image) {
                return $this->failed('上传失败', 400);
            }else{
                $path = $uploadsPath.$filename;
                $absolute_path = url('uploads'). '/' . $path;
                return $this->success(['message' => '上传成功', 'path' => $path, '$absolute_path' => $absolute_path]);
            }
        }else{
            return $this->failed('请选择上传的文件');
        }
    }

    public function uploadVideo(Request $request)
    {
        if ($request->hasFile('video_file')) {
            $original_file = $request->video_file;
            $uploadsPath = generateUploadsPath($request->category);
            $original_ext = $original_file->extension();
            $filename = date('YmdHis').'.'.$original_ext;
            $path = public_path('uploads/'.$uploadsPath.$filename);
            Storage::disk('uploads')->makeDirectory($uploadsPath);
            $video = Storage::disk('uploads')->putFileAs($uploadsPath, $request->file('video_file'), $filename);
            if(!$video) {
                return $this->failed('上传失败', 400);
            }else{
                $path = $uploadsPath.$filename;
                $absolute_path = url('uploads'). '/' . $path;
                return $this->success(['message' => '上传成功', 'path' => $path, '$absolute_path' => $absolute_path]);
            }
        }else{
            return $this->failed('请选择上传的文件');
        }
    }

}
