<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="/bootstrap/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">校团</a>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="搜索">
                    </div>
                </form>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">iOS</a></li>
                    <li><a href="#">SVN</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Java <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">jmeter</a></li>
                            <li><a href="#">EJB</a></li>
                            <li><a href="#">Jasper Report</a></li>
                            <li class="divider"></li>
                            <li><a href="#">分离的链接</a></li>
                            <li class="divider"></li>
                            <li><a href="#">另一个分离的链接</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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

</body>
</html>