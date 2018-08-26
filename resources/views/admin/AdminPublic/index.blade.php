@include('admin.AdminPublic._meta')
    <title>@yield('title','印象日记后台')</title>
    <meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>

<body>
    <!--后台顶部导航栏-->
    @include('admin.AdminPublic._header')
    <header class="navbar-wrapper">
        <div class="navbar navbar-fixed-top">
            <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="javascript:void(0);">印象日记后台</a> {{--<a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>--}}
                <span class="logo navbar-slogan f-l mr-10 hidden-xs">v0.1</span>
                {{--<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>--}}
                {{--<nav class="nav navbar-nav">--}}
                    {{--<ul class="cl">--}}
                        {{--<li class="dropDown dropDown_hover">--}}
                            {{--<a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i>--}}
                            {{--</a>--}}
                            {{--<ul class="dropDown-menu menu radius box-shadow">--}}
                                {{--<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>--}}
                                {{--<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>--}}
                                {{--<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>--}}
                                {{--<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
                <nav id="Hui-nav" class="nav navbar-nav">
                    <ul class="cl">
                        <li id="Huinav_1">
                            <a href="javascript:void(0);"> <i class="am-icon-home"></i> 前台首页</a>
                        </li>
                    </ul>
                </nav>
                <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                    <ul class="cl">
                        <li>超级管理员</li>
                        <li class="dropDown dropDown_hover">
                            <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
                            <ul style="margin: 0;" class="dropDown-menu menu radius box-shadow">
                                <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
                                <li><a href="#">切换账户</a></li>
                                <li><a href="#">退出</a></li>
                            </ul>
                        </li>
                        <li id="Hui-msg"> <a href="#" title="消息">
                                <span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a>
                        </li>
                        <li id="Hui-skin" class="dropDown right dropDown_hover">
                            <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                            <ul style="margin: 0;" class="dropDown-menu menu radius box-shadow">
                                <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                                <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                                <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                                <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                                <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                                <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!--后台顶部导航栏结束-->

    <!--左侧菜单栏-->
    @include('admin.AdminPublic._menu')
    <!--左侧菜单栏结束-->

    <div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
    <section class="Hui-article-box">
        <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
            <div class="Hui-tabNav-wp">
                <ul id="min_title_list" class="acrossTab cl">
                    <li class="active">
                        <span title="我的桌面" data-href="welcome.html">我的桌面</span>
                        <em></em></li>
                </ul>
            </div>
            <div class="Hui-tabNav-more btn-group">
                <a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a>
                <a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a>
            </div>
        </div>
        <div id="iframe_box" class="Hui-article">
            <div class="show_iframe">
                <div style="display:none" class="loading"></div>
                <!-- 右侧内容显示区域 -->
                @section('contain')
                @show
                <!-- 右侧内容显示区域结束 -->
            </div>
        </div>
    </section>
    <div class="contextMenu" id="Huiadminmenu">
        <ul>
            <li id="closethis">关闭当前 </li>
            <li id="closeall">关闭全部 </li>
        </ul>
    </div>

    <!--_footer 作为公共模版分离出去-->
    @include('admin.AdminPublic._footer')
    <!--/_footer 作为公共模版分离出去-->

    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/static/admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
    <script type="text/javascript">
    $(function() {
        /*$("#min_title_list li").contextMenu('Huiadminmenu', {
            bindings: {
                'closethis': function(t) {
                    console.log(t);
                    if(t.find("i")){
                        t.find("i").trigger("click");
                    }
                },
                'closeall': function(t) {
                    alert('Trigger was '+t.id+'\nAction was Email');
                },
            }
        });*/
    });
    /*个人信息*/
    function myselfinfo() {
        layer.open({
            type: 1,
            area: ['300px', '200px'],
            fix: false, //不固定
            maxmin: true,
            shade: 0.4,
            title: '查看信息',
            content: '<div>管理员信息</div>'
        });
    }

    /*资讯-添加*/
    function article_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-添加*/
    function picture_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*产品-添加*/
    function product_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*用户-添加*/
    function member_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    </script>

    <!--此乃百度统计代码，请自行删除-->
    <script>
    /*
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    */
    </script>
    <!--/此乃百度统计代码，请自行删除-->
</body>

</html>
