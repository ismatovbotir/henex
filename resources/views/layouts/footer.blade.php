 <div class="header" id="header" style="position: static; background: rgb(255, 255, 255);">
     <div class="wrapper clearfix">
         <div class="logo"><a href="https://www.henex.cn/"><img
                     src="https://www.henex.cn/uploadfile/202209/77407f913066b93.png"
                     alt="HENEX (GUANGZHOU) TECHNOLOGY CO.,LTD "></a></div>
         <a href="javascript:0" class="navbtn">menu</a>
         <a href="javascript:0" class="searchbtn">search</a>

         <div class="language-box">
             <a href="javascript:0" class="langbtn"><span>English</span></a>
             <div class="language">
                 <p class="on"><a href="/" class="en">English</a></p>
                 <p><a href="/cn" class="china">中文</a></p>
                 <p><a href="/spanish" class="spanish">Español</a></p>
                 <p><a href="/french" class="french">Français</a></p>
                 <p><a href="/arabic" class="arabic">بالعربية</a></p>
                 <p><a href="/russian" class="russian">Русский язык</a></p>
             </div>
         </div>

         <div class="search">
             <form class="search-form" action="/index.php" method="get">
                 <input type="hidden" name="s" value="api">
                 <input type="hidden" name="c" value="api">
                 <input type="hidden" name="m" value="search">
                 <input type="hidden" name="dir" id="dr_search_module_dir" value="product">
                 <div class="input-group">
                     <div class="search-group">
                         <button id="dr_search_module_name" type="button" class="btn default dropdown-toggle"
                             data-toggle="dropdown" aria-expanded="false">产品 <i class="fa fa-angle-down"></i></button>
                         <ul class="dropdown-menu">
                             <!--这是来列出全部可以搜索的内容模块-->
                             <li><a href="javascript:dr_search_module_select('product', '产品');"> 产品 </a></li>
                             <li><a href="javascript:dr_search_module_select('news', '文章');"> 文章 </a></li>
                             <li><a href="javascript:dr_search_module_select('demo', '示例');"> 示例 </a></li>
                             <li><a href="javascript:dr_search_module_select('article', '列表');"> 列表 </a></li>
                             <li><a href="javascript:dr_search_module_select('download', '下载');"> 下载 </a></li>
                             <li><a href="javascript:dr_search_module_select('join', '招聘');"> 招聘 </a></li>
                         </ul>
                     </div>
                     <input type="text" placeholder=" " name="keyword" class="fc-search-keyword" value="">
                     <button class="btn default" type="submit"> <i class="fa fa-search"></i> </button>
                 </div>
                 <script>
                     // 这段js是用来执行搜索的
                     function dr_search_module_select(dir, name) {
                         $("#dr_search_module_dir").val(dir);
                         $("#dr_search_module_name").html(name + ' <i class="fa fa-angle-down"></i>');
                     }
                     dr_search_module_select('product', '产品');
                 </script>
             </form>
         </div>

         <div class="navbox">
             <ul class="nav clearfix">
                 <li class="active"><a href="https://www.henex.cn/"
                         title="HENEX (GUANGZHOU) TECHNOLOGY CO.,LTD ">Home</a></li>
                 <li class=""><a href="https://www.henex.cn/index.php?c=category&amp;id=2">Products</a>
                     <div class="nav-list" style="display: none; width: 250px;">
                         <dl>
                             <dd class=" dropdown">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=15">Wireless Barcode
                                     Scanner<i></i></a>
                                 <div class="nav-list-sub">
                                     <!--第三层：调用第三级共享栏目数据-->
                                     <p class="">
                                         <a href="https://www.henex.cn/index.php?c=category&amp;id=31">2D Wireless
                                             Barcode Scanner</a>
                                     </p>
                                     <p class="">
                                         <a href="https://www.henex.cn/index.php?c=category&amp;id=32">1D Wireless
                                             Barcode Scanner</a>
                                     </p>
                                 </div>
                             </dd>
                             <dd class=" dropdown">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=16">Wired Barcode
                                     Scanner<i></i></a>
                                 <div class="nav-list-sub">
                                     <!--第三层：调用第三级共享栏目数据-->
                                     <p class="">
                                         <a href="https://www.henex.cn/index.php?c=category&amp;id=33">1D Wired
                                             Barcode Scanner</a>
                                     </p>
                                     <p class="">
                                         <a href="https://www.henex.cn/index.php?c=category&amp;id=34">2D Wired
                                             Barcode Scanner</a>
                                     </p>
                                     <p class="">
                                         <a href="https://www.henex.cn/index.php?c=category&amp;id=41">Industrial
                                             Hand-Held Scanner</a>
                                     </p>
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=17">Desktop Barcode
                                     Scanner</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=19">Barcode Scanner
                                     Module</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=36">Mobile Data
                                     Collector</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                         </dl>
                     </div>
                 </li>
                 <li class=""><a href="https://www.henex.cn/index.php?c=category&amp;id=5">Industries</a>
                     <div class="nav-list" style="display: none; width: 250px;">
                         <dl>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=25">Retail</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=26">Medical</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=27">Public sector</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=28">Manufacturing</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=29">Warehousing and
                                     Logistics Industry</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=30">Traffic &amp;
                                     Self-service</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                         </dl>
                     </div>
                 </li>
                 <li class=""><a href="https://www.henex.cn/index.php?c=category&amp;id=1">News</a>
                     <div class="nav-list" style="display: none; width: 250px;">
                         <dl>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=7">Company News</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=8">Industry News</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                             <dd class="">
                                 <a href="https://www.henex.cn/index.php?c=category&amp;id=9">Latest activities</a>
                                 <div class="nav-list-sub">
                                 </div>
                             </dd>
                         </dl>
                     </div>
                 </li>
                 <li class=""><a href="https://www.henex.cn/index.php?c=category&amp;id=3">About Us</a>
                 </li>
                 <li class="" style="z-index: 5;"><a
                         href="https://www.henex.cn/index.php?c=category&amp;id=4">Contact Us</a>
                 </li>
             </ul>
         </div>

     </div>
 </div>
