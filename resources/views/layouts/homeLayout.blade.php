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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="location.html">Contract Jobs</a></li>
                        <li><a href="location.html">Walkin Jobs</a></li>
                        <li><a href="location.html">Jobs by Location</a></li>
                        <li><a href="location.html">Jobs by Function</a></li>
                        <li><a href="location.html">Jobs by Industry</a></li>
                        <li><a href="location.html">Jobs by Company</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a name='login'>Recruiter Updates</a></li>
                        <li><a href="recruiters.html">Recruiters you are following</a></li>
                        <li><a href="codes.html">Shortcodes</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobs.html">Walk-ins</a></li>
                        <li><a href="jobs.html">Bpo Jobs</a></li>
                        <li><a href="jobs.html">Teaching Jobs</a></li>
                        <li><a href="jobs.html">Diploma Jobs</a></li>
                        <li><a href="jobs.html">Tech Support</a></li>
                        <li><a href="jobs.html">Finance Jobs</a></li>
                        <li><a href="jobs.html">Part time Jobs</a></li>
                        <li><a href="jobs.html">Health Care</a></li>
                        <li><a href="jobs.html">Hospitality</a></li>
                        <li><a href="jobs.html">Internships</a></li>
                        <li><a href="jobs.html">Research Jobs</a></li>
                        <li><a href="jobs.html">Defence Jobs</a></li>
                    </ul>
                </li>
                <li><a name='login'>Login</a></li>
                <li><a href="resume.html">Upload Resume</a></li>
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
                <h1>Start your job search</h1>
                <p>
                    <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                    <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Location';}">
                    <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                </p>
            </div>
        </div>
    </div>
</div>
@yield('content')
<div class="footer">
    <div class="container">
        <div class="col-md-3 grid_3">
            <h4>Navigate</h4>
            <ul class="f_list f_list1">
                <li><a href="index.html">Home</a></li>
                <li><a name='login'>Sign In</a></li>
                <li><a name='login'>Join Now</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
            <ul class="f_list">
                <li><a href="features.html">Features</a></li>
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="jobs.html">Post a Job</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 grid_3">
            <h4>Twitter Widget</h4>
            <div class="footer-list">
                <ul>
                    <li><i class="fa fa-twitter tw1"> </i>
                        <p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                    <li><i class="fa fa-twitter tw1"> </i>
                        <p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                    <li><i class="fa fa-twitter tw1"> </i>
                        <p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 grid_3">
            <h4>Seeking</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
        </div>
        <div class="col-md-3 grid_3">
            <h4>Sign up with your account or email</h4>
            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>--}}
            <form>
                <a href="#login"></a>
                <input type="text" class="form-control" placeholder="Enter your email or account">
                <input type="text" class="form-control" placeholder="Enter your password">
                <button type="button" class="btn red">Sign Up</button>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer_bottom">
    <div class="container">
        <div class="col-sm-2">
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
        <div class="clearfix"></div>
        <div class="copy">
            <p>Tkloespik &copy; 2017-12.blog<a href="http://www.cssmoban.com/" target="_blank" title="fuldamall">富达商城</a></p>
        </div>
    </div>
</div>
</body>
</html>