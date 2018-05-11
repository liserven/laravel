<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 14:20
 */
?>
        <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 首页示例二</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/hplus/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/hplus/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Morris -->
    <link href="/static/hplus/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/static/hplus/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/static/hplus/css/animate.css" rel="stylesheet">
    <link href="/static/hplus/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-success pull-right">月</span>
                    <h5>收入</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">40 886,200</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i>
                    </div>
                    <small>总收入</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">全年</span>
                    <h5>订单</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">275,800</h1>
                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i>
                    </div>
                    <small>新订单</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-primary pull-right">今天</span>
                    <h5>访客</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">106,120</h1>
                    <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i>
                    </div>
                    <small>新访客</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-danger pull-right">最近一个月</span>
                    <h5>活跃用户</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">80,600</h1>
                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i>
                    </div>
                    <small>12月</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>消息</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content ibox-heading">
                    <h3><i class="fa fa-envelope-o"></i> 新消息</h3>
                    <small><i class="fa fa-tim"></i> 您有22条未读消息</small>
                </div>
                <div class="ibox-content">
                    <div class="feed-activity-list">

                        <div class="feed-element">
                            <div>
                                <small class="pull-right text-navy">1月前</small>
                                <strong>井幽幽</strong>
                                <div>有人说：“一辈子很长，要跟一个有趣的人在一起”。我想关注我的人，应该是那种喜欢找乐子也乐意分享乐趣的人，你们一定挺优秀的。所以单身的应该在这条留言，互相勾搭一下。特别有钱人又帅可以直接私信我！</div>
                                <small class="text-muted">4月11日 00:00</small>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                                <small class="pull-right">2月前</small>
                                <strong>马伯庸 </strong>
                                <div>又方便，又防水，手感又好，还可以用手机遥控。简直是拍戏利器，由其是跟老师们搭戏的时候…想想还有点小激动啊，嘿嘿。</div>
                                <small class="text-muted">11月8日 20:08 </small>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                                <small class="pull-right">5月前</small>
                                <strong>芒果宓 </strong>
                                <div>一个完整的梦。</div>
                                <small class="text-muted">11月8日 20:08 </small>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                                <small class="pull-right">5月前</small>
                                <strong>刺猬尼克索</strong>
                                <div>哈哈哈哈 你卖什么萌啊! 蠢死了</div>
                                <small class="text-muted">11月8日 20:08 </small>
                            </div>
                        </div>


                        <div class="feed-element">
                            <div>
                                <small class="pull-right">5月前</small>
                                <strong>老刀99</strong>
                                <div>昨天评论里你见过最“温暖和感人”的诗句，整理其中经典100首，值得你收下学习。</div>
                                <small class="text-muted">11月8日 20:08 </small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div>
                                <small class="pull-right">5月前</small>
                                <strong>娱乐小主 </strong>
                                <div>你是否想过记录自己的梦？你是否想过有自己的一个记梦本？小时候写日记，没得写了就写昨晚的梦，后来变成了习惯………翻了一晚上自己做过的梦，想哭，想笑…</div>
                                <small class="text-muted">11月8日 20:08 </small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div>
                                <small class="pull-right">5月前</small>
                                <strong>DMG电影 </strong>
                                <div>《和外国男票乘地铁，被中国大妈骂不要脸》妹子实在委屈到不行，中国妹子找外国男友很令人不能接受吗？大家都来说说自己的看法</div>
                                <small class="text-muted">11月8日 20:08 </small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-8">

            <div class="row">
                <div class="col-sm-6">

                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>联系信息</h5>

                            </div>
                            <div class="ibox-content">
                                <p><i class="fa fa-send-o"></i> 博客：<a href="http://www.zi-han.net" target="_blank">http://www.zi-han.net</a>
                                </p>
                                <p><i class="fa fa-qq"></i> QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=516477188&site=qq&menu=yes" target="_blank">516477188</a>
                                </p>
                                <p><i class="fa fa-weixin"></i> 微信：<a href="javascript:;">zheng-zihan</a>
                                </p>
                                <p><i class="fa fa-credit-card"></i> 支付宝：<a href="javascript:;" class="支付宝信息">zheng-zihan@qq.com / *子涵</a>
                                </p>
                            </div>
                        </div>
                </div>
                <div class="col-sm-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>联系信息</h5>

                        </div>
                        <div class="ibox-content">
                            <p><i class="fa fa-send-o"></i> 博客：<a href="http://www.zi-han.net" target="_blank">http://www.zi-han.net</a>
                            </p>
                            <p><i class="fa fa-qq"></i> QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=516477188&site=qq&menu=yes" target="_blank">516477188</a>
                            </p>
                            <p><i class="fa fa-weixin"></i> 微信：<a href="javascript:;">zheng-zihan</a>
                            </p>
                            <p><i class="fa fa-credit-card"></i> 支付宝：<a href="javascript:;" class="支付宝信息">zheng-zihan@qq.com / *子涵</a>
                            </p>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>交易地区</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-sm-6">
                                    <table class="table table-hover margin bottom">
                                        <thead>
                                        <tr>
                                            <th style="width: 1%" class="text-center">序号</th>
                                            <th>交易</th>
                                            <th class="text-center">日期</th>
                                            <th class="text-center">销售额</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>防盗门
                                                </small>
                                            </td>
                                            <td class="text-center small">2014.9.15</td>
                                            <td class="text-center"><span class="label label-primary">&yen;483.00</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>衣柜
                                            </td>
                                            <td class="text-center small">2014.9.15</td>
                                            <td class="text-center"><span class="label label-primary">&yen;327.00</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>防盗门
                                            </td>
                                            <td class="text-center small">2014.9.15</td>
                                            <td class="text-center"><span class="label label-warning">&yen;125.00</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>橱柜</td>
                                            <td class="text-center small">2014.9.15</td>
                                            <td class="text-center"><span class="label label-primary">&yen;344.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>手机</td>
                                            <td class="text-center small">2014.9.15</td>
                                            <td class="text-center"><span class="label label-primary">&yen;235.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td>显示器</td>
                                            <td class="text-center small">2014.9.15</td>
                                            <td class="text-center"><span class="label label-primary">&yen;100.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <div id="world-map" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

<!-- 全局js -->
<script src="/static/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/hplus/js/bootstrap.min.js?v=3.3.6"></script>



<!-- Flot -->
<script src="/static/hplus/js/plugins/flot/jquery.flot.js"></script>
<script src="/static/hplus/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/static/hplus/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="/static/hplus/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="/static/hplus/js/plugins/flot/jquery.flot.pie.js"></script>
<script src="/static/hplus/js/plugins/flot/jquery.flot.symbol.js"></script>

<!-- Peity -->
<script src="/static/hplus/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/static/hplus/js/demo/peity-demo.js"></script>

<!-- 自定义js -->
<script src="/static/hplus/js/content.js?v=1.0.0"></script>


<!-- jQuery UI -->
<script src="/static/hplus/js/plugins/jquery-ui/jquery-ui.min.js"></script>


<!-- EayPIE -->
<script src="/static/hplus/js/plugins/easypiechart/jquery.easypiechart.js"></script>

<!-- Sparkline -->
<script src="/static/hplus/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="/static/hplus/js/demo/sparkline-demo.js"></script>

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
<!--统计代码，可删除-->

</body>

</html>
