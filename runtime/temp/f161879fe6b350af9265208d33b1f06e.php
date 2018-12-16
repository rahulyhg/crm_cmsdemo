<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:86:"/Applications/MAMP/htdocs/crm_cmsdemo/public/../application/index/view/auth/group.html";i:1544715935;s:79:"/Applications/MAMP/htdocs/crm_cmsdemo/application/index/view/Public/header.html";i:1544713743;s:78:"/Applications/MAMP/htdocs/crm_cmsdemo/application/index/view/Public/upnav.html";i:1544457544;s:80:"/Applications/MAMP/htdocs/crm_cmsdemo/application/index/view/Public/leftnav.html";i:1544888721;s:79:"/Applications/MAMP/htdocs/crm_cmsdemo/application/index/view/Public/footer.html";i:1544713943;}*/ ?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>Hello Amaze UI</title>
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="/crm_cmsdemo/public/static/amazeui/assets/i/favicon.png">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="/crm_cmsdemo/public/static/amazeui/assets/i/app-icon72x72@2x.png">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="/crm_cmsdemo/public/static/amazeui/assets/i/app-icon72x72@2x.png">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href="/crm_cmsdemo/public/static/amazeui/assets/css/amazeui.min.css">
    <link rel="stylesheet" href="/crm_cmsdemo/public/static/amazeui/assets/css/amazeui.videojs.css">
    <link rel="stylesheet" href="/crm_cmsdemo/public/static/amazeui/assets/css/app.css">
    <link rel="stylesheet" href="/crm_cmsdemo/public/static/amazeui/assets/css/admin.css">
</head>

<body>
<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>Amaze UI</strong> <small>后台管理模板</small>
    </div>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> <?php echo $groups[0]['title']; ?> —— <?php echo $groups[0]['username']; ?> <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>
<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <!--<li><a href="<?php echo url('index/index'); ?>"><span class="am-icon-home"></span> 首页</a></li>-->
            <!--<?php if(is_array($tree) || $tree instanceof \think\Collection || $tree instanceof \think\Paginator): if( count($tree)==0 ) : echo "" ;else: foreach($tree as $key=>$vo): ?>
            <li class="admin-parent am-panel">
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"> <span class="<?php echo $vo['icon']; ?>"></span> <?php echo $vo['title']; ?> <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in">
                    <?php if(is_array($vo['childrens']) || $vo['childrens'] instanceof \think\Collection || $vo['childrens'] instanceof \think\Paginator): if( count($vo['childrens'])==0 ) : echo "" ;else: foreach($vo['childrens'] as $key=>$childrens): ?>
                    <li><a href="/crm_cmsdemo/public/<?php echo $childrens['name']; ?>?selfid=<?php echo $childrens['id']; ?>" <?php if($childrens['id'] == $selfid): ?>class="am-active"<?php endif; ?> class="am-cf"> <span class="<?php echo $childrens['icon']; ?>"></span> <?php echo $childrens['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>-->
            <li class="am-panel">
                <a href="<?php echo url('index/index'); ?>">
                    <i class="am-icon-home"></i> 首页 <i class="am-icon-angle-right am-fr am-margin-right"></i>
                </a>
            </li>
            <?php if(is_array($tree) || $tree instanceof \think\Collection || $tree instanceof \think\Paginator): if( count($tree)==0 ) : echo "" ;else: foreach($tree as $key=>$vo): ?>
                <li class="am-panel">
                    <a data-am-collapse="{parent: '#collapase-nav-1', target: '#<?php echo $vo['id']; ?>'}">
                        <i class="<?php echo $vo['icon']; ?>"></i> <?php echo $vo['title']; ?> <i class="am-icon-angle-right am-fr am-margin-right"></i>
                    </a>
                    <ul <?php if($vo['id'] == $hisFatherData[0]['id']): ?> class="am-list am-collapse admin-sidebar-sub am-in" <?php endif; ?> class="am-list am-collapse admin-sidebar-sub" id="<?php echo $vo['id']; ?>">
                        <?php if(is_array($vo['childrens']) || $vo['childrens'] instanceof \think\Collection || $vo['childrens'] instanceof \think\Paginator): if( count($vo['childrens'])==0 ) : echo "" ;else: foreach($vo['childrens'] as $key=>$childrens): ?>
                            <li><a href="/crm_cmsdemo/public/<?php echo $childrens['name']; ?>?selfid=<?php echo $childrens['id']; ?>" <?php if($childrens['id'] == $selfid): ?>class="am-active"<?php endif; ?>><span class="<?php echo $childrens['icon']; ?>"></span> <?php echo $childrens['title']; ?> </a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>




        </ul>
    </div>
</div>
    <!-- sidebar end -->
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg"><?php echo $hisFatherData[0]['title']; ?></strong> / <small><?php echo $selfData[0]['title']; ?></small></div>
            </div>

            <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-left admin-content-list ">
                <?php echo $selfData[0]['backend_summary']; ?>
            </ul>


            <div class="am-g">
                <div class="am-u-md-6">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">文件上传<span class="am-icon-chevron-down am-fr" ></span></div>
                        <div class="am-panel-bd am-collapse am-in" id="collapse-panel-1">
                            <div style="width:100%;height:250px;">
                                <video id="example_video_1" class="video-js vjs-amazeui vjs-fluid" controls preload="none"
                                       poster="http://video-js.zencoder.com/oceans-clip.png"
                                       data-setup="{}">
                                    <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type='video/mp4' />
                                    <track kind="captions" src="video.js/demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                                    <track kind="subtitles" src="video.js/demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="am-u-md-6">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-4'}">任务 task<span class="am-icon-chevron-down am-fr" ></span></div>
                        <div id="collapse-panel-4" class="am-panel-bd am-collapse am-in">
                            <ul class="am-list admin-content-task">
                                <li>
                                    <div class="admin-task-meta"> Posted on 25/1/2120 by John Clark</div>
                                    <div class="admin-task-bd">
                                        The starting place for exploring business management; helping new managers get started and experienced managers get better.
                                    </div>
                                    <div class="am-cf">
                                        <div class="am-btn-toolbar am-fl">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-check"></span></button>
                                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                                            </div>
                                        </div>
                                        <div class="am-fr">
                                            <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="admin-task-meta"> Posted on 25/1/2120 by 呵呵呵</div>
                                    <div class="admin-task-bd">
                                        基兰和狗熊出现在不同阵营时。基兰会获得BUFF，“装甲熊憎恨者”。狗熊会获得BUFF，“时光老人憎恨者”。
                                    </div>
                                    <div class="am-cf">
                                        <div class="am-btn-toolbar am-fl">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-check"></span></button>
                                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                                            </div>
                                        </div>
                                        <div class="am-fr">
                                            <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
        </footer>
    </div>
    <!-- content end -->
</div>
<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
</body>

<script src="/crm_cmsdemo/public/static/js/jquery.js"></script>
<!--[if lte IE 8 ]>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/crm_cmsdemo/public/static/amazeui/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/crm_cmsdemo/public/static/amazeui/assets/js/amazeui.min.js"></script>
<script src="/crm_cmsdemo/public/static/amazeui/assets/js/app.js"></script>
<!--vedio.js 引入视频专用-->
<script src="/crm_cmsdemo/public/static/amazeui/assets/js/video.js"></script>
<script>
    videojs.options.flash.swf = "/crm_cmsdemo/public/static/amazeui/assets/js/video-js.swf";
</script>
<!--vedio.js结束-->
</html>
<script>
    var player = videojs('example_video_1', { fluid: true }, function () {
        this.play(); // if you don't trust autoplay for some reason
    })
</script>
