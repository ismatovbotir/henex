<html lang="zh-cn"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>HENEX (GUANGZHOU) TECHNOLOGY CO.,LTD</title>
    <meta content="HENEX,barcode scanner, 2D desktop barcode scanner" name="keywords">
    <meta
        content="HENEX (GUANGZHOU) TECHNOLOGY CO.,LTD is a high-tech enterprise which specializes in the research, development,manufacure, sales and application of barcode scanning equipments and automatic identification products. "
        name="description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- css开始 -->
    <link href="https://www.henex.cn/static/default/web/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://www.henex.cn/static/default/web/css/animate.css" rel="stylesheet" type="text/css">
    <link href="https://www.henex.cn/static/default/web/css/swiper.css" rel="stylesheet" type="text/css">

    <!-- 系统关键js -->
    <script type="text/javascript">
        var is_mobile_cms = '';
        var web_dir = '/';
    </script>
    <script src="https://www.henex.cn/api/language/zh-cn/lang.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://www.henex.cn/static/default/web/scripts/jquery-1.8.2.min.js"
        charset="utf-8"></script>
    <script src="https://www.henex.cn/static/assets/js/cms.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://www.henex.cn/static/assets/js/layer/theme/default/layer.css?v=3.1.1"
        id="layuicss-layer">

</head>

<body>


    @include('layouts.top')

    @include('layouts.header')



    <script>
        function initMenu() {
            var _speed = 400; // in ms
            var _hold = $('.navbox ul.nav');
            var _t = null;
            if (_hold.length) {
                var _list = _hold.children();
                _list.each(function() {
                    var _el = $(this);
                    var _box = _el.children('div.nav-list');
                    var _sub = _box.children();
                    _box.show().width(_sub.outerWidth()).hide();
                    _el.mouseenter(function() {
                        var _this = this;
                        _t = setTimeout(function() {
                            $(_this).css('zIndex', 10);
                            _el.addClass('hover');
                            if (_box.is(':hidden')) {
                                _box.show();
                                _sub.css('marginTop', -_sub.outerHeight());
                            }
                            _sub.stop().animate({
                                marginTop: 0
                            }, _speed);
                        }, 30)
                    }).mouseleave(function() {
                        if (_t) clearTimeout(_t);
                        var _this = $(this);
                        $(this).css('zIndex', 5);
                        if (_sub.length) {
                            _sub.stop().animate({
                                marginTop: -_sub.outerHeight()
                            }, _speed, function() {
                                _box.hide();
                                _el.removeClass('hover');
                                _this.css('zIndex', 1);
                            });
                        } else {
                            _el.removeClass('hover');
                        }
                    });
                });
            }
        }
        $(document).ready(function() {
            initMenu();
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.navbtn').click(function() {
                $('.navbox').slideToggle();
                $(this).toggleClass("cerrar");
            });
            $('.searchbtn').click(function() {
                $('.search').slideToggle();
                $(this).toggleClass("cerrar");
            });

        });
    </script>


    <script type="text/javascript">
        $(function() {
            var fixbox = $('.header');
            var startPos = $(fixbox).offset().top;
            var headerid = document.getElementById('header');
            $.event.add(window, "scroll", function() {
                var scrollPos = $(window).scrollTop();
                $(fixbox).css('position', ((scrollPos) > startPos) ? 'fixed' : 'static');
                $(fixbox).css('top', ((scrollPos) > startPos) ? '0px' : "");
                $(fixbox).css('background', ((scrollPos) > startPos) ? 'rgba(255,255,255,1)' : '#fff');
                $(fixbox).css('padding', ((scrollPos) > startPos) ? '0px 0' : "");
                //			 if(scrollPos>startPos){
                //			   headerid.className="header header-fixed";
                //			 }else{
                //			   headerid.className="header";
                //			  
                //			 }
            });
        });
    </script>


    @include('layouts.banner')
   

    @yield('content')
    <!--产品中心-->
    


    @include('layouts.footer')




</body>

</html>
