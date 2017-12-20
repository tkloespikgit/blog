<?php

namespace App\Http\Controllers;

use App\Tokens;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeAuth extends Controller
{
    //

    public function register(Request $request)
    {
        if ($request ->isMethod('post')){

            $this ->validate($request,[
                'username' => 'bail|required|max:16',
                'account' => 'bail|required|max:16|unique:users,account',
                'user_email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|max:16|confirmed',
                'password_confirmation' => 'required',
                'verify_code' => 'required|captcha'
            ]);

            $user = new Users;


            $user ->fill([
                'name' => $request ->username,
                'account' => $request ->account,
                'email' => $request -> user_email,
                'password' => md5($request ->password),
                'sex' => 1
            ]);
            if ($user ->save()){
                $insertID = $user ->id;
                $tmp_token = bcrypt($request ->username . microtime());
                $token = new Tokens;
                $token ->fill([
                    'target_id' => $insertID,
                    'type' => 'user_register_token',
                    'tokens' => $tmp_token,
                    'expired_time' => time() + 7*24*3600
                ]);
                $token ->save();
                Common::mailSend($request ->user_email,['name' =>$request ->username,'url' => $request ->getHost() . "/verifyToken/".$tmp_token],'emails.test','Tkloespik-博客邮箱激活');
                $request ->session()->put('member',[
                    'id' =>$insertID,
                    'name' => $request ->username
                ]);
                return view('index.register');
            }else{
                return redirect('home/register');
            }
        }else{
            return view('error.404');
        }
    }


    public function logout(Request $request)
    {
        $request ->session() ->forget('member');
        return redirect() ->back();
    }


    public function login(Request $request)
    {
        if ($request ->isMethod('post')) {

            $this ->validate($request,[
                'username' => 'required',
                'password' => 'required',
                'captcha' => 'required|captcha'
            ],[
                'username.required' => '请输入您的注册邮箱或帐号',
                'password.required' => '请输入您的登录密码',
                'captcha.required' => '请输入验证码',
                'captcha.captcha' => '验证码不正确，请重试'
            ]);
            $user = DB::table('users') ->where('account',$request ->username)
                ->orWhere('email',$request ->username)
                ->first(['id','name','account','email','password']);

            if (!$user || $user ->password != md5($request ->password)){

                $error = '帐号或密码错误';
                return view('index.login',['errorlogin' => $error]);
            }else{
                $request ->session() ->put('member',[
                    'id' =>$user ->id,
                    'name' => $user ->name
                ]);
                return redirect('/');
            }

        } else{

            return view('index.login');
        }
    }


    public function checkVerify(Request $request,$data)
    {



    }
}
