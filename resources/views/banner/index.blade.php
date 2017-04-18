@extends('layout.layout')
@section('title')
    {{$banner->title}}
@endsection
@section('content')
    <div class="row">
        @if($banner)
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    @foreach($banner->content as $key=>$b)
                        @if($key==0)
                            <li data-target="#myCarousel" data-slide-to="{{$key}}" class="active"></li>
                        @else
                            <li data-target="#myCarousel" data-slide-to="{{$key}}"></li>
                        @endif
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($banner->content as $key=>$b)
                        @if($key==0)
                            <div class="item active">
                                <div class="thumbnail">
                                    <img src="{{$b['img']}}" class="center-block img-responsive"
                                         alt="通用的占位符缩略图">
                                    <div class="caption">
                                        <p>{{$b['description']}}</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="item">
                                <div class="thumbnail">
                                    <img src="{{$b['img']}}" class="center-block img-responsive"
                                         alt="通用的占位符缩略图">
                                    <div class="caption">
                                        <p>{{$b['description']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <a class="carousel-control left" href="#myCarousel"
                   data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel"
                   data-slide="next">&rsaquo;</a>
            </div>
        @endif
    </div>
    <div class="row">
        <form class="form-inline" role="form">
            <div class="form-group">
                <label class="form-control pull-right" for="form">发表评论：</label>
                <input name="form" id="form" class="form-control">
            </div>
        </form>
    </div>
    <div class="row">
        <ul class="media-list">
            <li class="media">
                <div class="media-body">
                    <a class="pull-left" href="#">
                        <img class="col-md-6 col-sm-6 col-xs-6 img-circle col-xs-offset-2 media-object"
                             src="http://p2.pstatp.com/thumb/2450/7196432297"
                             alt="通用的占位符图像">
                    </a>
                    <p>
                        最牛80后！
                    </p>
                </div>
            </li>
            <li class="media">
                <div class="media-body">
                    <a class="pull-left" href="#">
                        <img class="col-md-6 col-sm-6 col-xs-6 img-circle col-xs-offset-2 media-object"
                             src="http://p2.pstatp.com/thumb/2450/7196432297"
                             alt="通用的占位符图像">
                    </a>
                    <p>
                        最牛80后！
                    </p>
                </div>
            </li>

        </ul>
    </div>
@endsection