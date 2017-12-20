<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    div#main{
        box-shadow: 10px 10px #f2fff0;
        width: 580px;
        height: 700px;
        background: rgb(240, 241, 228);
        margin: auto;
    }
    table{
        width: 100%;
    }
</style>
<body>
<div id="main">
    <p>Hello,Dear {{$name}}:</p>
    <p></p>
    <p style="text-indent: 28px">Welcome to sign in my website,here are the link to activate your email-address,<a href="{{$url}}" title="active link">Click It right now</a>,if it dose not work,copy and open it in your Browser. </p>
    <p>{{$url}}</p>
    <br>
    <br>
    <p style="text-align: right">Best Wishes! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p style="text-align: right">From Tkloespik.</p>
</div>

</body>
</html>