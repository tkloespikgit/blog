<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="{{asset('index/css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('index/js/jquery.min.js')}}"></script>
    <script src="{{asset('index/js/bootstrap.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('index/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <!----font-Awesome----->
    <link href="{{asset('index/css/font-awesome.css')}}" rel="stylesheet">
    <!----font-Awesome----->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="{{asset('index/images/logo.png')}}" alt=""/></a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">主页</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">文章<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-column columns-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="services.html">Action</a></li>
                                    <li><a href="services.html">Another action</a></li>
                                    <li><a href="services.html">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="services.html">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="services.html">One more separated link</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="services.html">Action</a></li>
                                    <li><a href="services.html">Another action</a></li>
                                    <li><a href="services.html">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="services.html">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="services.html">One more separated link</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="services.html">Action</a></li>
                                    <li><a href="services.html">Another action</a></li>
                                    <li><a href="services.html">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="services.html">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="services.html">One more separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">问答<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a name='login'>Recruiter Updates</a></li>
                        <li><a href="recruiters.html">Recruiters you are following</a></li>
                        <li><a href="codes.html">Shortcodes</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">邮件<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobs.html">Walk-ins</a></li>
                        <li><a href="jobs.html">Bpo Jobs</a></li>
                        <li><a href="jobs.html">Teaching Jobs</a></li>
                        <li><a href="jobs.html">Diploma Jobs</a></li>
                    </ul>
                </li>
                <li><a name='login'>登录</a></li>
                <li><a href="resume.html">个人中心</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--/.navbar-collapse-->
</nav>
<div class="banner_1">
    <div class="container">
        <div id="search_wrapper1">
            <div id="search_form" class="clearfix">
                <h1>搜索文章</h1>
                <p>
                    <input type="text" class="text" placeholder="请输入关键词 .." value="" name="keywords">
                    <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Search"></label>
                </p>
            </div>
        </div>
    </div>
</div>
@yield('content')
<div class="footer">
    <div class="container">
        <div class="col-md-4 grid_3">
            <h4>输入您的邮箱或帐号登录！</h4>
            <form>
                <a href="#login"></a>
                <input type="text" class="form-control"  placeholder="Enter your email or account">
                <input type="text" class="form-control" placeholder="Enter your password">
                <button type="button" class="btn red"> 立 即 登 录 </button>
                <a href="register.html" class="btn red"> 前 往 注 册 </a>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer_bottom">
    <div class="container">
        {{--<div class="col-sm-2">
            <ul class="f_list2">
                <li><a href="jobs.html">Russia Jobs</a></li>
                <li><a href="jobs.html">Australia Jobs</a></li>
                <li><a href="jobs.html">Srilanka Jobs</a></li>
                <li><a href="jobs.html">Poland Jobs</a></li>
            </ul>
        </div>
        <div class="col-sm-2">
            <ul class="f_list2">
                <li><a href="jobs.html">Newzland Jobs</a></li>
                <li><a href="jobs.html">Pakistan Jobs</a></li>
                <li><a href="jobs.html">Srilanka Jobs</a></li>
                <li><a href="jobs.html">Irland Jobs</a></li>
            </ul>
        </div>
        <div class="col-sm-2">
            <ul class="f_list2">
                <li><a href="jobs.html">Canada Jobs</a></li>
                <li><a href="jobs.html">Germany Jobs</a></li>
                <li><a href="jobs.html">China Jobs</a></li>
                <li><a href="jobs.html">Nepal Jobs</a></li>
            </ul>
        </div>
        <div class="col-sm-6 footer_text">
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
        </div>
        <div class="clearfix"></div>--}}
        <div class="copy">
            <p>Tkloespik &copy; 2017-12.blog<a href="https://www.fuldamall.com/" target="_blank" title="fuldamall">-后台链接</a></p>
        </div>
    </div>
</div>
</body>
</html>