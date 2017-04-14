<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$banner->title}}</title>
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
    <div class="row">
        <p class="text-left text-info lead">向左对齐文本</p>
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

</div>

</body>
</html>