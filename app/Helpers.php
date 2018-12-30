<?php
/**
 * 拓展公共函数
 */

/**
 * 示例
 */
//if(!function_exists('test')){
//    function test($param)
//    {
//        return null;
//    }
//}

/**
 * 生成文件上传路径
 */
if(!function_exists('generateUploadsPath')){
    function generateUploadsPath($category = 'other')
    {
        return $category.'/'.date('Ymd').'/';
    }
}
