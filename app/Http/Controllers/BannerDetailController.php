<?php

namespace App\Http\Controllers;

use App\Repositories\v1\BannerDetailRepository;
use Illuminate\Http\Request;

class BannerDetailController extends Controller
{
    //
    private $bannerDetailRepository;

    public function __construct
    (
        BannerDetailRepository $bannerDetailRepository
    )
    {
        $this->bannerDetailRepository = $bannerDetailRepository;
    }

    public function index(Request $request)
    {
        $bannerId = $request->get('id');
        $banner = $this->bannerDetailRepository->getBannerById($bannerId);
        if (!$banner) {
            abort('404');
        }
        $pageData['banner'] = $banner;
        return view('banner.index', $pageData);
    }
}
