<?php

use Illuminate\Database\Seeder;

class BannerDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $insertData = [
            'title' => '金正恩观摩朝鲜特种部队比赛 接见士兵喜笑颜开',
            'content' => serialize([
                [
                    'img' => 'http://p3.pstatp.com/origin/1bb2000d9490248eeb93',
                    'description' => ' 当地时间2017年4月13日，据朝鲜劳动党机关报《劳动新闻》报道，朝鲜劳动党委员长金正恩近日观摩朝军“特种部队降落和打击目标比赛”。（图片署名： 东方IC） "'
                ],
                [
                    'img' => 'http://p1.pstatp.com/origin/1bb8000d79532a356721',
                    'description' => '朝鲜劳动党委员长金正恩用望远镜，观摩朝军“特种部队降落和打击目标比赛”。（图片署名： 东方IC） "'
                ]
            ]),
            'source_url' => 'http://www.toutiao.com/a6408272624786358530/#p=1',
            'source_website' => '今日头条',
            'add_time' => time(),
        ];
        \Illuminate\Support\Facades\DB::table('banner_detail')
            ->insert($insertData);
    }
}
