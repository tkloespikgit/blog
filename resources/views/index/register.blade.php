@extends('layouts.homeLayout')
@section('title','注册')
@section('content')
    <div class="container">
        <div class="single">
            <div class="col-md-5 single_right">
                <div class="login-form-section">
                    <div class="login-content">
                        <form method="post" action="{{url('home/register')}}">
                            {{csrf_field()}}
                            <div class="section-title">
                                <h3>Complete your information</h3>
                            </div>
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
                                    <input type="password" name="re_password" required="required" class="form-control " placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa fa-lock"></i></span>
                                    <input type="text" style="width: 76%" name="verify_code" required="required" class="form-control " placeholder="Verify Code">
                                    <img src="{{captcha_src('inverse')}}" style="width: 24%;height: 42px" onclick="this.src='/captcha/inverse?'+Math.random()">
                                </div>
                            </div>
                        <div class="login-btn">
                            <input type="submit" value="Log in">
                        </div>
                        </form>
                        <div class="login-bottom">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <style>
        .fa{
            width: 25px;
        }
    </style>
@endsection


