<?php
/**
 * Created by PhpStorm.
 * User: tkloespik
 * Date: 17-12-9
 * Time: 下午6:12
 */
namespace App\Http\Controllers;

use Mail;
class Common extends Controller {




    public static function mailSend($to,$user_args,$html_tmp,$subject){

        Mail::send($html_tmp,$user_args,function ($message) use ($to ,$subject){

            $message ->to($to) ->subject($subject);
        });

        return Mail::failures();
    }
}