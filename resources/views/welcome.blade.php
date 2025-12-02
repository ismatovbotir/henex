@extends('layouts.app')

@section('content')
    <div class="iproduct">
        <div class="wrapper">
            <div class="title text-center  wow fadeInUp animated animated" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <h2>Products</h2>
                <p></p>
            </div>

            <div class="iproduct-list">

                <ul class="clearfix iproductul1">
                    <li class="li1 wow fadeInUp animated on animated"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="index.php?c=category&amp;id=15">
                            <div class="clearfix box-shadow">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202402/1ad02830f31d153.jpg);"></span>
                                </div>
                                <div class="text">
                                    <h3 style="color:#000000">Wireless Barcode Scanner</h3>
                                    <h4 style="color:#000000">——</h4>
                                    <div class="txt">
                                        <p><br></p>
                                    </div>
                                    <!--<a href="index.php?c=category&amp;id=15" class="more">MORE</a>-->
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="li2 wow fadeInUp animated  animated"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="index.php?c=category&amp;id=16">
                            <div class="clearfix box-shadow">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202404/96a5294929acf80.jpg);"></span>
                                </div>
                                <div class="text">
                                    <h3 style="color:">Wired Barcode Scanner</h3>
                                    <h4 style="color:">——</h4>
                                    <div class="txt">
                                        <p><br></p>
                                    </div>
                                    <!--<a href="index.php?c=category&amp;id=16" class="more">MORE</a>-->
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="clearfix iproductul2">
                    <li class="li1 wow fadeInUp animated animated"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="index.php?c=category&amp;id=17">
                            <div class="clearfix box-shadow">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202404/a1f901871496a4b.jpg);"></span>
                                </div>
                                <div class="text">
                                    <h3 style="color:#000000">Desktop Barcode Scanner</h3>
                                    <h4 style="color:#000000">——</h4>
                                    <div class="txt">
                                        <p><br></p>
                                    </div>
                                    <!--<a href="index.php?c=category&amp;id=17" class="more">MORE</a>-->
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="li2 wow fadeInUp animated animated"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="index.php?c=category&amp;id=19">
                            <div class="clearfix box-shadow">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202211/2a49532dc3b6a.jpg);"></span>
                                </div>
                                <div class="text">
                                    <h3 style="color:#000000">Barcode Scanner Module</h3>
                                    <h4 style="color:#000000">——</h4>
                                    <div class="txt"></div>
                                    <!--<a href="index.php?c=category&amp;id=19" class="more">MORE</a>-->
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="li3 wow fadeInUp animated animated"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="index.php?c=category&amp;id=36">
                            <div class="clearfix box-shadow">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202306/86871123e4121e8.jpg);"></span>
                                </div>
                                <div class="text">
                                    <h3 style="color:">Mobile Data Collector</h3>
                                    <h4 style="color:">——</h4>
                                    <div class="txt"></div>
                                    <!--<a href="index.php?c=category&amp;id=36" class="more">MORE</a>-->
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="clearfix"></div>
            <!--<div class="imore text-center wow fadeInUp animated" data-wow-delay="0.5s"><a href="https://www.henex.cn/index.php?c=category&id=2">View More Products</a></div>-->
        </div>
    </div>


    <script>
        $(".iproductul1 li").mouseover(function() {
            $(this).addClass('on').siblings().removeClass('on');
            //$(this).toggleClass('on').siblings().removeClass('on');
        });
        $(".iproductul1 .li2").mouseout(function() {
            $(this).removeClass('on');
            $('.iproductul1 .li1').addClass('on');
        });
    </script>



    <!-- 行业 -->
    <div class="icase-box">
        <div class="wrapper">
            <div class="title text-center wow fadeInUp animated animated" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <h2>Industries</h2>
            </div>
            <div class="icase clearfix">
                <div class="swiper-icase swiper-container wow fadeInUp animated swiper-container-horizontal animated"
                    data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="swiper-wrapper"
                        style="transition-duration: 0ms; transform: translate3d(-2030px, 0px, 0px);">
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="2" style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=27">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/868bef726b738c2.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Public sector</h3>
                                    <p>With the rapid development of the market, to improve work efficiency and improve
                                        service satisfaction. Barcode...</p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="3" style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=28">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/bb24c3cab61290f.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Manufacturing</h3>
                                    <p>Barcode scanners play a very important role in the manufacturing industry. In
                                        previous manufacturing, the conc...</p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="4" style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=29">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/d5ba4f4030cafae.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Warehousing and Logistics Industry</h3>
                                    <p>With the popularization of barcode technology in all areas of life, data</p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5"
                            style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=30">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/fcd9d27bca71983.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Traffic &amp; Self-service</h3>
                                    <p>​"Internet + new retail" is coming, and the traditional retail industry has
                                        reached the threshold of transform...</p>
                                </div>
                            </a>
                        </li>

                        <li class="swiper-slide" data-swiper-slide-index="0" style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=25">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/b1a7ec21c7e00f3.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Retail</h3>
                                    <p>With the continuous development of the market and changes in consumer demand, a
                                        series of emerging retail indu...</p>
                                </div>
                            </a>
                        </li>

                        <li class="swiper-slide" data-swiper-slide-index="1" style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=26">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/4bd557387227e1a.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Medical</h3>
                                    <p>With the improvement of medical standards, the number of medical consumables used
                                        has increased</p>
                                </div>
                            </a>
                        </li>

                        <li class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2"
                            style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=27">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/868bef726b738c2.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Public sector</h3>
                                    <p>With the rapid development of the market, to improve work efficiency and improve
                                        service satisfaction. Barcode...</p>
                                </div>
                            </a>
                        </li>

                        <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="3"
                            style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=28">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/bb24c3cab61290f.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Manufacturing</h3>
                                    <p>Barcode scanners play a very important role in the manufacturing industry. In
                                        previous manufacturing, the conc...</p>
                                </div>
                            </a>
                        </li>

                        <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="4"
                            style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=29">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/d5ba4f4030cafae.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Warehousing and Logistics Industry</h3>
                                    <p>With the popularization of barcode technology in all areas of life, data</p>
                                </div>
                            </a>
                        </li>

                        <li class="swiper-slide" data-swiper-slide-index="5" style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=30">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/fcd9d27bca71983.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Traffic &amp; Self-service</h3>
                                    <p>​"Internet + new retail" is coming, and the traditional retail industry has
                                        reached the threshold of transform...</p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"
                            style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=25">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/b1a7ec21c7e00f3.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Retail</h3>
                                    <p>With the continuous development of the market and changes in consumer demand, a
                                        series of emerging retail indu...</p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"
                            style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=26">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/4bd557387227e1a.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Medical</h3>
                                    <p>With the improvement of medical standards, the number of medical consumables used
                                        has increased</p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="2" style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=27">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/868bef726b738c2.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Public sector</h3>
                                    <p>With the rapid development of the market, to improve work efficiency and improve
                                        service satisfaction. Barcode...</p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="3" style="width: 270px; margin-right: 20px;">
                            <a href="https://www.henex.cn/index.php?c=category&amp;id=28">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202210/bb24c3cab61290f.jpg);"></span>
                                </div>
                                <div class="txt clearfix">
                                    <h3>Manufacturing</h3>
                                    <p>Barcode scanners play a very important role in the manufacturing industry. In
                                        previous manufacturing, the conc...</p>
                                </div>
                            </a>
                        </li>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"> </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"> </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>





    <!--关于我们-->
    <div class="wrapper" style="overflow:hidden">
        <div class="title text-center wow fadeInUp animated animated" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <h2>About Us</h2>
        </div>
        <div class="iabout">
            <div class="  wow slideInLeft animated animated" data-wow-delay="0.5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <!--<div class="title"><h2>About Us</h2></div>-->
                <div class="txt"><img src="https://www.henex.cn/uploadfile/202211/1c0b9707f6bee7e.jpg"
                        class="iabout-r wow slideInRight animated animated" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
                    <p
                        style="padding: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(81, 81, 81); font-family: Signika, sans-serif; font-size: 16px; white-space: normal; background-color: rgb(255, 255, 255);">
                        HENEX (GUANGZHOU) TECHNOLOGY CO.,LTD is located in the National High-tech Development Zone -
                        Guangzhou Huangpu Development Zone. It is a high-tech enterprise which specializes in the
                        research, development,manufacure, sales and application of barcode scanning equipments and
                        automatic identification products.&nbsp;</p>
                    <p
                        style="padding: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(81, 81, 81); font-family: Signika, sans-serif; font-size: 16px; white-space: normal; background-color: rgb(255, 255, 255);">
                        <br>
                    </p>
                    <p
                        style="padding: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(81, 81, 81); font-family: Signika, sans-serif; font-size: 16px; white-space: normal; background-color: rgb(255, 255, 255);">
                        HENEX provides world-wide customers with HENEX brand and OEM/ODM products of omni-directional
                        barcode scanner, 2D desktop barcode scanner, 2D image barcode scanner,CCD barcode scanner,
                        wireless barcode scanners, barcode scanner module, etc. at present, many types of barcode
                        scanner have been widely used in industrial, commerial, taxation,defense, transportation,
                        finance, multi-line medical and health, post and telecom, and office automation.&nbsp;</p>
                </div>
                <!--  <div class="imore"><a href="https://www.henex.cn/index.php?c=category&id=3">Read More</a></div>-->
            </div>
        </div>
        <!--<div class="iabout-r wow slideInRight animated" data-wow-delay="0.5s"></div>-->
        <div class="clearfix"></div>

        <div class="iabout-menu wow fadeInUp animated" data-wow-delay="0.5s"
            style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
            <ul class="clearfix">
                <li><a href="https://www.henex.cn/index.php?c=category&amp;id=10#on10"><img
                            src="https://www.henex.cn/static/default/web/img/about1.png">
                        <p>Profile</p>
                    </a></li>
                <li><a href="https://www.henex.cn/index.php?c=category&amp;id=11#on11"><img
                            src="https://www.henex.cn/static/default/web/img/about2.png">
                        <p>Culture</p>
                    </a></li>
                <li><a href="https://www.henex.cn/index.php?c=category&amp;id=12#on12"><img
                            src="https://www.henex.cn/static/default/web/img/about3.png">
                        <p>Certification</p>
                    </a></li>
                <li><a href="https://www.henex.cn/index.php?c=category&amp;id=13#on13"><img
                            src="https://www.henex.cn/static/default/web/img/about4.png">
                        <p>Philosophy</p>
                    </a></li>
            </ul>
        </div>
    </div>




    <!-- 新闻 -->
    <div class="inews-box">
        <div class="wrapper">
            <div class="title  text-center  wow fadeInUp animated" data-wow-delay="0.3s"
                style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                <h2>LATEST NEWS &amp; BLOG</h2>

            </div>
            <div class="inews">
                <div class="swiper-inews swiper-container wow fadeInUp animated swiper-container-horizontal"
                    data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                    <div class="swiper-wrapper"
                        style="transition-duration: 0ms; transform: translate3d(-4760px, 0px, 0px);">
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=164">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202310/71d3946613f5fea.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=164">
                                    <p>2023-10-27</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=164"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=164">HENEX attend to 2023
                                        year The 134th Canton Fair</a></h3>
                                <p>HENEX attend to 2023 year The 134th Canton Fair picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=162">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202310/77d6a6b62c69cbb.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=162">
                                    <p>2023-10-07</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=162"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=162">The 134th Canton
                                        Fair</a></h3>
                                <p>We Sincerely invite you to visit and join us in The 134th Canton Fair</p>
                            </div>

                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="8" style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=161">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202309/97e0cb510b12499.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=161">
                                    <p>2023-09-19</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=161"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=161">PARCEL+POST EXPO
                                        2023</a></h3>
                                <p>We Sincerely invite you to visit and join us in PARCEL+POST EXPO 2023</p>
                            </div>

                        </li>
                        <li class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=185">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202410/6424be5d8d783c3.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=185">
                                    <p>2024-10-21</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=185"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=185">HENEX attend to 136th
                                        Canton Fair 2024</a></h3>
                                <p>HENEX attend to 136th Canton Fair 2024 picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=184">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202410/65d96444a29c267.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=184">
                                    <p>2024-10-21</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=184"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=184">HENEX will exhibit at
                                        Gitex 2024</a></h3>
                                <p>HENEX attend to Gitex 2024 picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="2"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=170">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202404/1ad69d9b335f709.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=170">
                                    <p>2024-04-25</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=170"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=170">HENEX attend to 135th
                                        Canton Fair 2024</a></h3>
                                <p>HENEX attend to 135th Canton Fair 2024 picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="3"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=167">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202403/4f1007fb2223.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=167">
                                    <p>2024-02-29</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=167"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=167">HENEX will exhibit at
                                        EuroCIS 2024</a></h3>
                                <p>HENEX attends EuroCIS 2024 with pictures from the scene.</p>
                            </div>

                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="4"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=166">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202401/d68a9f2f7163.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=166">
                                    <p>2024-01-19</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=166"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=166">HENEX attend to USA NRF
                                        2024</a></h3>
                                <p>HENEX attend to USA NRF 2024 picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="5"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=165">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202310/eac060cf8ade938.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=165">
                                    <p>2023-10-27</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=165"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=165">HENEX attend to
                                        PARCEL+POST EXPO 2023</a></h3>
                                <p>HENEX attend to PARCEL+POST EXPO 2023 picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="6"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=164">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202310/71d3946613f5fea.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=164">
                                    <p>2023-10-27</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=164"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=164">HENEX attend to 2023
                                        year The 134th Canton Fair</a></h3>
                                <p>HENEX attend to 2023 year The 134th Canton Fair picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="7"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=162">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202310/77d6a6b62c69cbb.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=162">
                                    <p>2023-10-07</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=162"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=162">The 134th Canton
                                        Fair</a></h3>
                                <p>We Sincerely invite you to visit and join us in The 134th Canton Fair</p>
                            </div>

                        </li>
                        <li class="swiper-slide swiper-slide-prev" data-swiper-slide-index="8"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=161">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202309/97e0cb510b12499.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=161">
                                    <p>2023-09-19</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=161"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=161">PARCEL+POST EXPO
                                        2023</a></h3>
                                <p>We Sincerely invite you to visit and join us in PARCEL+POST EXPO 2023</p>
                            </div>

                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=185">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202410/6424be5d8d783c3.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=185">
                                    <p>2024-10-21</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=185"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=185">HENEX attend to 136th
                                        Canton Fair 2024</a></h3>
                                <p>HENEX attend to 136th Canton Fair 2024 picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=184">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202410/65d96444a29c267.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=184">
                                    <p>2024-10-21</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=184"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=184">HENEX will exhibit at
                                        Gitex 2024</a></h3>
                                <p>HENEX attend to Gitex 2024 picture from the scene</p>
                            </div>

                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                            style="width: 346.667px; margin-right: 50px;">
                            <a href="https://www.henex.cn/index.php?c=show&amp;id=170">
                                <div class="zoom"><span
                                        style="background-image: url(https://www.henex.cn/uploadfile/202404/1ad69d9b335f709.jpg);"></span>
                                </div>
                            </a>
                            <div class="txt clearfix"><a href="https://www.henex.cn/index.php?c=show&amp;id=170">
                                    <p>2024-04-25</p>
                                </a>
                                <h3><a href="https://www.henex.cn/index.php?c=show&amp;id=170"></a><a
                                        href="https://www.henex.cn/index.php?c=show&amp;id=170">HENEX attend to 135th
                                        Canton Fair 2024</a></h3>
                                <p>HENEX attend to 135th Canton Fair 2024 picture from the scene</p>
                            </div>

                        </li>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"> </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"> </div>
            </div>
        </div>
    </div>



    <!--<script>
        var elements = document.querySelectorAll('.demo-image');
        Intense(elements);
    </script>
            -->

    <script src="https://www.henex.cn/static/default/web/scripts/swiper.min4.js"></script>

    <script type="text/javascript">
        var swiperFlag = false;
        var mySwiper = new Swiper('.swiper-banner', {
            autoplay: {
                disableOnInteraction: false,
                delay: 6000, //1秒切换一次
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true,

            onSlideChangeEnd: function(swiper) {
                console.log(swiper.activeIndex);
                //			console.log(11);
                var _this = $('.swiper-banner .swiper-slide').eq(swiper.activeIndex);
                if (!swiperFlag) {
                    swiperFlag = true;
                } else {
                    videoSelect(_this);
                }


            }
        })
        //	console.log(22);
        videoSelect($('.swiper-banner .swiper-slide.swiper-slide-active'));
        // 	console.log(33);
        function videoSelect(_this) {
            var flag = true;
            var cc = _this.hasClass('ban_video');
            if (cc) {
                //	    	console.log(44);
                mySwiper.stopAutoplay();
                var videos =
                    '<video src="' + _this.data('video') +
                    '" autoplay="autoplay" muted class="vv" style="display:none;"></video>';
                _this.append(videos);

                var aaa = setInterval(function() {
                    if (!isNaN($(".vv").get(0).duration) && flag) {
                        clearInterval(aaa);
                        flag = false;
                        setTimeout(function() {
                            _this.find('video').css("display", "block");
                        }, 500)
                    }
                }, 10);

                _this.find('video').bind('ended', function() {
                    mySwiper.slideNext();
                    mySwiper.startAutoplay();
                });
            } else {
                $('.vv').remove();
            }
        }



        var swiper = new Swiper('.swiper-ilinks', {
            loop: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 50,
            //navigation: {
            //	  nextEl: '.swiper-button-next',
            //	  prevEl: '.swiper-button-prev',
            //	},
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

        });


        var swiper = new Swiper('.swiper-icase', {
            loop: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },

            breakpoints: {
                1080: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1300: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                4000: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                }
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });

        var swiper = new Swiper('.swiper-inews', {
            loop: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },


            breakpoints: {
                900: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                1300: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                4000: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                }
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
@endsection
