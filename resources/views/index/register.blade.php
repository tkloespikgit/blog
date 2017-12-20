@extends('layouts.homeLayout')
@section('title','注册')
@section('content')
    <div class="container">
        <div class="single">
            <div class="col-md-5 single_right">
                @if(!Session::has('member'))
                <div class="login-form-section">
                    <div class="login-content">
                        <form method="post" action="{{url('home/register')}}">
                            {{csrf_field()}}
                            <div class="section-title">
                                <h3>Complete your information</h3>
                            </div>

                            @if (count($errors))
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                    <input type="text" name="username" required="required" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa fa-user-md"></i></span>
                                    <input type="text" name="account" required="required" class="form-control" placeholder="Account">
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa fa-envelope"></i></span>
                                    <input type="text" name="user_email" required="required" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                    <input type="password" name="password" required="required" class="form-control " placeholder="Password">
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                    <input type="password" name="password_confirmation" required="required" class="form-control " placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa fa-lock"></i></span>
                                    <input type="text" style="width: 76%" name="verify_code" required="required" class="form-control " placeholder="Verify Code">
                                    <img src="{{captcha_src('default')}}" style="width: 24%;height: 42px" onclick="this.src='/captcha/default?'+Math.random()">
                                </div>
                            </div>
                        <div class="login-btn">
                            <input type="submit" value="注册" style="float: right">
                        </div>
                        </form>
                        {{--<div class="login-bottom">
                            <p>With your social media account</p>
                            <div class="social-icons">
                                <div class="button">
                                    <a class="tw" href="#"> <i class="fa fa-twitter tw2"> </i><span>Twitter</span>
                                        <div class="clearfix"> </div></a>
                                    <a class="fa" href="#"> <i class="fa fa-facebook tw2"> </i><span>Facebook</span>
                                        <div class="clearfix"> </div></a>
                                    <a class="go" href="#"><i class="fa fa-google-plus tw2"> </i><span>Google+</span>
                                        <div class="clearfix"> </div></a>
                                    <div class="clearfix"> </div>
                                </div>
                                <h4>Don,t have an Account? <a href="register.html"> Register Now!</a></h4>
                            </div>
                        </div>--}}
                    </div>
                </div>
                @else
                    <div class="login-form-section">
                        恭喜你注册成功，帐号激活链接已经发送至你的邮箱，请及时激活你的帐号以体验更多的功能！
                        <a href="{{url('/')}}">前往主页</a>
                    </div>
                @endif
            </div>
            <div class="col-md-7 single_right" id="reg_bg">

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <style>
        .fa{
            width: 25px;
        }
        .footer_bottom{
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
@endsection


