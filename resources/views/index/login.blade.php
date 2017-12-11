@extends('layouts.homeLayout')
@section('title','登录')
@section('content')
    <div class="container">
        <div class="single">
            <div class="col-md-5 single_right">
                @if(!Session::has('member'))
                    <div class="login-form-section">
                        <div class="login-content">
                            <form method="post" action="{{url('home/login')}}">
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
                                @if (isset($errorlogin))
                                    <div class="alert alert-danger">
                                        {{$errorlogin}}
                                    </div>
                                @endif
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                        <input type="text" name="username" required="required" class="form-control" placeholder="请输入您的帐号或邮箱">
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                        <input type="password" name="password" required="required" class="form-control " placeholder="password">
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-lock"></i></span>
                                        <input type="text" style="width: 76%" name="captcha" required="required" class="form-control " placeholder="Verify Code">
                                        <img src="{{captcha_src('default')}}" style="width: 24%;height: 42px" onclick="this.src='/captcha/default?'+Math.random()">
                                    </div>
                                </div>
                                <div class="login-btn">
                                    <input type="submit" value="登录" style="float: right">
                                </div>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="login-form-section">
                        您已登录！
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


