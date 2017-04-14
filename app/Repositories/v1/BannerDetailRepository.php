<?php
/**
 * Created by PhpStorm.
 * User: hanyun
 * Date: 17-4-14
 * Time: 上午9:35
 */

namespace App\Repositories\v1;


use App\Models\BannerDetailModel;

class BannerDetailRepository
{
    public function getBannerById($bannerId)
    {
        $banner = BannerDetailModel::where('status', 1)
            ->where('id', $bannerId)
            ->select(['title', 'content', 'source_website'])
            ->first();
        if ($banner) {
            $banner->content = unserialize($banner->content);
        }
        return $banner;
    }
}