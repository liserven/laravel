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

<div class="text-center loginscreen  animated fadeInDown signinpanel">
    <div>
        <input type="hidden" id="checkOver" value="{{ session('is_over') }}">
        <h2>选择你所要操作的圈子</h2>

        @foreach($list as $key=>$value)
       <div class="box
            @if($key==0)
               active
               @endif
        " data-id="{{$value->id}}">
           <div>
               <img src="http://ozi65v7vu.bkt.clouddn.com/2018/06/94709201806111729407610.jpg" alt="">
           </div>
           <p class="gangs_name">
               <strong >{{$value->name}}</strong>
           </p>
       </div>
        @endforeach
        <div class="button">
            <a href="/gang/admin_index" class="">进入管理</a>
        </div>
    </div>
</div>

<!-- 全局js -->
<script src="/static/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/hplus/js/plugins/toastr/toastr.min.js"></script>
<script src="/js/jquery.form.min.js"></script>
<script src="/static/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/Js/{{$action_name['mName']}}/{{strtolower($action_name['cName'])}}/{{strtolower($action_name['aName'])}}.js?v={{time()}}"></script>


</body>

</html>

