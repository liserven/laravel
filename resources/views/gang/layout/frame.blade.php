<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 14:23
 */
?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 首页示例二</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    @if( request()->path() == 'admin/welcome')
    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/hplus/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    @endif
    <link href="/static/hplus/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/static/hplus/css/animate.css" rel="stylesheet">
    <link href="/static/hplus/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="/static/layui/css/layui.css" rel="stylesheet">
    <link href="/css//admin/common.css" rel="stylesheet">
    <script src="/static/layui/layui.js"></script>
    @yield('link')
    <script type="text/javascript">
        layui.config({
            base:'/js/admin/',
        }).extend({
            custom : 'common'
        }).use('operation');
        var config = {
            uid: "{$User.am_id}",
            cName : "{$cName}",
            nickname:"{$User.am_nickname}"
        };
        var baseUrl = 'http://www.zxzm.com';
    </script>
</head>

<body style="background:#fff;">
@yield('content')
<!-- 全局js -->
<script src="/static/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="/Js/{{$action_name['mName']}}/{{strtolower($action_name['cName'])}}/{{strtolower($action_name['aName'])}}.js?v={{time()}}"></script>

@yield('script')
</body>
</html>
@yield('footer')