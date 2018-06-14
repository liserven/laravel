<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 10:22
 */
?>


        <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>圈子后台管理 - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/hplus/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/hplus/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/static/hplus/css/animate.css" rel="stylesheet">
    <link href="/static/hplus/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="/static/hplus/css/login.css" rel="stylesheet">
    <link href="/static/hplus/css/plugins/toastr/toastr.min.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg" style="padding: 10%;">

<div class="middle-box text-center loginscreen  animated fadeInDown signinpanel">
    <div>

        <input type="hidden" value="{{ session('is_login') }}" id="is_login">
        <form class="m-t" role="form" action="index.html" style="border-radius: 20px;">
            <h3>欢迎登录 圈子后台</h3>
            <div class="form-group">
                <input type="text" class="form-control uname" id="phone" placeholder="管理员手机" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control pword" id="password" placeholder="密码" required="">
            </div>
            <button type="button" class="btn btn-primary block full-width m-b" id="login-btn"> 登 录</button>

            <div class="sk-spinner sk-spinner-wave login-ing" style="display: none;">
                <div class="sk-rect1"></div>
                <div class="sk-rect2"></div>
                <div class="sk-rect3"></div>
                <div class="sk-rect4"></div>
                <div class="sk-rect5"></div><p>正在登录...</p>
            </div>

            </p>

        </form>
    </div>
</div>

<!-- 全局js -->
<script src="/static/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/hplus/js/plugins/toastr/toastr.min.js"></script>
<script src="/Js/{{$action_name['mName']}}/{{strtolower($action_name['cName'])}}/{{strtolower($action_name['aName'])}}.js?v={{time()}}"></script>

    <script>
        var _token = '{{csrf_token()}}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': _token
            }
        });
    </script>
</body>
</html>

