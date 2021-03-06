<?php

namespace App\Http\Controllers;

use App\Repositories\v1\BannerRepository;
use App\Repositories\v1\NewsRepository;
use App\Repositories\v1\RecommendRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $recommendRepository;
    private $bannerRepository;

    public function __construct
    (
        RecommendRepository $recommendRepository,
        BannerRepository $bannerRepository
    )
    {
        $this->recommendRepository = $recommendRepository;
        $this->bannerRepository = $bannerRepository;
    }

    //
    public function index()
    {
        $banner = $this->bannerRepository->getBanner(['id', 'title', 'img', 'banner_detail_id']);
        $recommend = $this->recommendRepository->getRecommend(['id', 'title']);
        $pageData['banner'] = $banner;
        $pageData['recommend'] = $recommend;
        $pageData['typeList'] = ['info', 'primary', 'success'];
        return view('index.index', $pageData);
    }
}
