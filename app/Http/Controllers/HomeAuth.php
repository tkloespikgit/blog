<?php

namespace App\Http\Controllers;

use App\Tokens;
use App\Users as Users;
use Illuminate\Http\Request;

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
                'password' => bcrypt($request ->passwprd),
                'sex' => 1
            ]);
            ;
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
                return redirect('/');
            }else{
                return redirect('home/register');
            }
            exit;
        }else{
            return view('error.404');
        }
    }


    protected function registerCheck(Request $request,$data)
    {




    }
}
