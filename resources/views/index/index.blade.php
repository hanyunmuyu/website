@extends('layout.layout')
@section('content')
    <div class="row">
        @if($banner)
            <div id="myCarousel" class="carousel slide">

                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    @foreach($banner as $key=>$b)
                        @if($key==0)
                            <li data-target="#myCarousel" data-slide-to="{{$key}}" class="active"></li>

                        @else
                            <li data-target="#myCarousel" data-slide-to="{{$key}}"></li>

                        @endif
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($banner as $key=>$b)
                        @if($key==0)
                            <div class="item active">
                                <a href="{{url('/banner')}}?id={{$b->banner_detail_id}}">
                                    <img class="center-block img-responsive"
                                         src="{{$b->img}}" alt="{{$b->title}}">
                                    <div class="carousel-caption">{{$b->title}}</div>
                                </a>
                            </div>
                        @else
                            <div class="item">
                                <a href="{{url('/banner')}}?id={{$b->banner_detail_id}}">
                                    <img class="center-block img-responsive"
                                         src="{{$b->img}}" alt="{{$b->title}}">
                                    <div class="carousel-caption">{{$b->title}}</div>
                                </a>
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
        @if($recommend)
            <p class="text-center">
                @foreach($recommend as $value)
                    <button type="button"
                            class="btn btn-{{$typeList[array_rand(['info','primary','success'],1)]}}">{{$value['title']}}</button>
                @endforeach
            </p>
        @endif

    </div>
@endsection