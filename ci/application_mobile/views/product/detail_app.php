<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=yes, initial-scale=1.0, width=device-width" />
    <meta name="google-site-verification" content="85cqipFDlt7hvvbYNc7r463d_qrBtaF-nuks5F5eb9k" />
    <meta name="naver-site-verification" content="4c1e9a0caeee53994d1dfae8d1261bc290a1fb8d" />

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="http://m.cloma.co.kr/images/favicon/57_57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://m.cloma.co.kr/images/favicon/60_60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://m.cloma.co.kr/images/favicon/72_72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://m.cloma.co.kr/images/favicon/76_76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://m.cloma.co.kr/images/favicon/114_114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://m.cloma.co.kr/images/favicon/120_120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://m.cloma.co.kr/images/favicon/144_144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://m.cloma.co.kr/images/favicon/152_152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://m.cloma.co.kr/images/favicon/180_180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="http://m.cloma.co.kr/images/favicon/192_192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://m.cloma.co.kr/images/favicon/32_32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://m.cloma.co.kr/images/favicon/96_96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://m.cloma.co.kr/images/favicon/16_16.png">
    <!--    <link rel="manifest" href="/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="http://m.cloma.co.kr/images/favicon/114_114.png">
    <meta name="theme-color" content="#ffffff">
    <!-- // favicon -->
    <meta property="og:url" content="http://m.cloma.co.kr" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="옷쟁이들">
    <meta property="og:image" content="http://m.cloma.co.kr/images/og_image.png?t=1592897227">
    <meta property="og:description" content="">
    <meta property="description" content="">


    <title>옷쟁이들(<?=SERVER_NO?>)</title>

    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/css/bootstrap-custom.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&amp;display=swap" rel="stylesheet">

    <link href="/css/normalize.css?v=1578549502" rel="stylesheet" />    <link href="/css/common_m.css?v=1592444271" rel="stylesheet" />
    <link href="/css/pc.css?v=1590993774" rel="stylesheet" />
    <!--    <script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>-->
    <script src="/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/js/jquery.form.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap-custom.min.js" type="text/javascript"></script>

    <script src="/js/common.js?v=1591166847" type="text/javascript"></script>    <script src="/js/front.js?v=1592369652" type="text/javascript"></script>    <script src="/js/brg.js?v=1586854768" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

    <!-- swipe lib-->
    <link href="/css/swiper.min.css?v=1573514998" rel="stylesheet" />    <script src="/js/swiper.jquery.min.js?v=1573515000" type="text/javascript"></script>
    <style type="text/css">

        /* transY loader */
        .loader_wrap {
            z-index: 99999; position: fixed; top: 50%; left: 50%; width: 4em;height: 4em; margin-top: -2em; margin-left: -2em; background: #cccccc; border-radius: 100px;
            -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px); transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
        }

        @keyframes lds-ball {
            0%, 100% { animation-timing-function: cubic-bezier(0.45, 0, 0.9, 0.55); }
            0% { -webkit-transform: translate(0, -2px); transform: translate(0, -2px);}
            50% { -webkit-transform: translate(0, 4px); transform: translate(0, 4px); animation-timing-function: cubic-bezier(0, 0.45, 0.55, 0.9); }
            100% { -webkit-transform: translate(0, -2px); transform: translate(0, -2px); }
        }
        @-webkit-keyframes lds-ball {
            0%, 100% { animation-timing-function: cubic-bezier(0.45, 0, 0.9, 0.55); }
            0% { -webkit-transform: translate(0, -2px); transform: translate(0, -2px); }
            50% { -webkit-transform: translate(0, 4px); transform: translate(0, 4px); animation-timing-function: cubic-bezier(0, 0.45, 0.55, 0.9); }
            100% { -webkit-transform: translate(0, -2px); transform: translate(0, -2px); }
        }

        .loader {
            margin:0; padding:0; width:100%; height:100%; overflow: hidden; display: block; position: absolute; left: 0; top: 0;
            _background:url('/uploads/product/11/11/475d37d1a8f00403858841ce710cc6e0_1.jpg') no-repeat ; background-size:70%; background-position: center; -webkit-animation: lds-ball 1s linear infinite;
            animation: lds-ball 1s linear infinite;
        }

        .loader img{
            width:70%;  height:70%; overflow: hidden; display: block;position: absolute; left: 50%; top: 0; margin-left: -17.5px; -webkit-animation: lds-ball 1s linear infinite;
            animation: lds-ball 1s linear infinite;
        }

    </style>
    <!-- loader -->
    <div class="loader_wrap" style="display:none;">
        <div class="loader"></div>
    </div>
    <!-- // loader -->

    <!-- set cont -->
    <script type="text/javascript">

        var isAjaxErrorAlert = true;
        var isShowLoader = true;
        var isLogin = 'N';
        var isApp = 'N';
        var status_code = [];
        status_code['success'] = '000';
        status_code['noauth'] = '100';
        status_code['error'] = '200';
        status_code['overlap'] = '300';

        var loader_wrap = $('.loader_wrap');
        var en_ak = '';

        function show_loader() {
            // $(loader_wrap).show();
            // setTimeout(function(){ $(loader_wrap).hide(); }, 5000);
        }//end of show_loader()

        function hide_loader() {
            $(loader_wrap).hide();
        }//end of hide_loader()

        /**
         * 로더 사이즈 설정
         */
        function set_loader_wrap_size() {
            var w = $(window).width() * 0.15;    //10%
            var w2 = w / 2;
            var max_w = 80;

            if( w > max_w ) {
                w = max_w;
                w2 = max_w / 2;
            }
            $(loader_wrap).css({'width':w + 'px', 'height':w + 'px', 'margin-left':'-' + w2 + 'px', 'margin-top':'-' + w2 + 'px'});
        }//end of set_loader_wrap_size()

        function goLogin(r_url){
            if(empty(r_url) == true) r_url = '%2Fproduct%2Fdetail_app%2F780';
            location.href = '/member?r_url='+r_url;
        }

        set_loader_wrap_size();
        // show_loader();

    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152034681-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-152034681-1');
    </script>

</head>

<body>
    <div class="box product_detail no-before">
        <div class="box-in product_info">

            <div class="cont_area product_cont" style="display: block;text-align: center;">

                <p>&nbsp;</p>
                <p style="font-size: 15px;font-weight: bold">'<?=$aProductInfo['p_name']?>'</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <?=$aProductInfo['p_detail']?>
                <? $product_img_arr = json_decode($aProductInfo['p_detail_image'],true);
                if(count($product_img_arr) > 0){?>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                <? foreach ($product_img_arr as $k => $r) {?>
                    <img src="<?=$r[0]?>" alt="img_<?=$k?>" />
                <?
                    }
                }
                ?>
                <!--
                <div class="more">
                    <button> + 상품설명 더보기</button>
                </div>
                -->
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(function(){
            //상품설명 더보기
            $('.product_cont .more button').on('click' ,function(e){
                e.preventDefault();
                $('.product_cont').css('height' , 'auto');
                $('.product_cont .more').hide();
            });
        })
    </script>
</body>
</html>