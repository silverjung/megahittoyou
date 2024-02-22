<?php
    include  $_SERVER['DOCUMENT_ROOT']."./db.php";
    //include_once("adm/countvisit.php");
    include_once("./admin/countvisit.php");
	//include_once("./poplayer.php");
    include $_SERVER['DOCUMENT_ROOT']."/popupresult.php"; // popup
?>

<!DOCTYPE html>
<html>
    <head>

        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer'
                        ? '&l=' + l
                        : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f
                    .parentNode
                    .insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-KSLV5VM');
        </script>
        <!-- End Google Tag Manager -->


        <meta charset="utf-8">
        <!-- IE 구버전에서 화면 깨지는거 방지 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- 브라우저 확대,축소 비활성화 -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">


        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="author" content="메가힛!투유 MEGAHIT! TO YOU">
        <meta
            name="keywords"
            content="공모전, 웹툰, 웹툰 IP 인큐베이팅 공모전, 영상화 타깃, 웹툰공모전, 메가힛투유, MEGAHITTOYOU, 메가힛, 인큐베이팅, 웹툰메가힛, 메가힛공모전, 웹툰IP">
        <meta name="description" content="영상화 타깃 웹툰 IP 인큐베이팅 공모전">
        <link rel="canonical" href="https://megahittoyou.com">

        <meta property="og:title" content="메가힛!투유 MEGAHIT! TO YOU">
        <meta property="og:url" content="https://megahittoyou.com">
        <meta property="og:image" content="./img/thumb.png">
        <meta property="og:type" content="website">
        <meta property="og:description" content="영상화 타깃 웹툰 IP 인큐베이팅 공모전">

        <!-- style -->
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/sect01.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- script -->
        <script src="./lib/jquery-3.5.1.min.js"></script>
        <script src="./js/dday.js"></script>
        <script src="./js/script.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <title>메가힛!투유 MEGAHIT! TO YOU</title>



    </head>

    <body>

    <script type="text/javascript">
        if (document.location.protocol == "http:") document.location.href = document.location.href.replace("http:", "https:");
    </script>

    <!--<div class="dday_wrapper">
        <h2 class="dday_scr">출품 마감 시한</h3>
        <h2 class="dday"></h2>
    </div> -->
    <!-- .dday_wrapper -->

    <!-- <div class="quick">
        <ul>
            <li>홍보 영상</li>
            <li>공모전 개요</li>
            <li>시상내역</li>
            <li>유의사항</li>
            <li>&nbsp;&nbsp;&nbsp;TOP</li>
        </ul>
    </div> -->

    <section id="sect01">
        <div class="_pc">
            <div class="wrapper">
                <div class="container">
                    <div class="tit">
                        <div class="tit_cen bookmark" data-aos="fade-down" data-aos-delay="100">
                            <img src="./img/bookmark_pc.png" alt="북마크">
                        </div>
                        <div class="tit_cen subtit" data-aos="fade-down" data-aos-delay="300">
                            <img src="./img/subtit_pc.png" alt="인큐베이팅 공모전">
                        </div>
                        <div class="tit_cen titimg" data-aos="fade-down" data-aos-delay="500">
                            <img src="./img/tit_pc.png" alt="수상작 발표">
                        </div>
                    </div>
                    <div class="book trophy">
                        <img src="./img/book_pc.png" alt="트로피 사진">
                    </div>
                    <div class="book book2">
                        <img src="./img/book2_pc.png" alt="책 사진">
                    </div>
                </div>
                <div class="pang" data-aos="fade-down" data-aos-duration="2000"><img src="./img/pang_pc.png" alt="폭죽"></div>
            </div><!-- .wrapper -->
            <div class="work">
                <div class="cong"><img src="./img/sec1_sub_pc.png" alt="축하 멘트"></div>
                <div id="move">
                    <div class="sec1_tit"><img src="./img/sec1_tit_pc.png" alt="수상작품"></div>
                </div>
                <div class="box">
                    <div class="best" data-aos="zoom-in" data-aos-duration="1000"><img src="./img/sec1_best1_pc.png" alt="대상 최우수상"></div>
                    <div class="best2" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000"><img src="./img/sec1_tro2.png" alt="우수상"></div>
                </div>
            </div>
        </div><!-- ._pc -->
        <div class="_mo">
            <div class="wrapper">
                <div class="container">
                    <div class="tit">
                        <div class="tit_cen bookmark" data-aos="fade-down" data-aos-delay="100">
                            <img src="./img/mo/bookmark_mo.png" alt="북마크">
                        </div>
                        <div class="tit_cen subtit" data-aos="fade-down" data-aos-delay="300">
                            <img src="./img/mo/subtit_mo.png" alt="인큐베이팅 공모전">
                        </div>
                        <div class="tit_cen titimg" data-aos="fade-down" data-aos-delay="500">
                            <img src="./img/mo/tit_mo.png" alt="수상작 발표">
                        </div>
                    </div>
                    <div class="book trophy">
                        <img src="./img/mo/book_mo.png" alt="트로피 사진">
                    </div>
                    <div class="book book2">
                        <img src="./img/mo/book2_mo.png" alt="책 사진">
                    </div>
                </div>
                <div class="pang" data-aos="fade-down" data-aos-duration="2000"><img src="./img/mo/pang_mo.png" alt="폭죽"></div>
            </div>
            <div class="work">
                <div class="cong"><img src="./img/mo/sec1_sub_mo.png" alt="축하 멘트"></div>
                <div id="move">
                    <div class="sec1_tit"><img src="./img/mo/sec1_tit_mo.png" alt="수상작품"></div>
                </div>
                <div class="box">
                    <div class="best" data-aos="zoom-in" data-aos-duration="1000"><img src="./img/mo/sec1_best_mo.png" alt="대상 최우수상"></div>
                    <div class="best2" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="800"><img src="./img/mo/sec1_best2_mo.png" alt="우수상"></div>
                </div>
            </div>
        </div><!-- ._mo -->
    </section><!-- #sect01 -->

    <!-- <section id="sect04">
        <div class="_pc">
            <p>
                (주)투유드림  |  서울특별시 성북구 중앙로 13길 16-10(종암동)<br>
                대표이사 : 유택근  |  사업자등록번호 : 209-81-59897  |  대표 메일 : help@megahittoyou.com
            </p>
        </div>
        <div class="_mo">
            <p>
                (주)투유드림  |  서울특별시 성북구 중앙로 13길 16-10(종암동)<br>
                대표이사 : 유택근  |  사업자등록번호 : 209-81-59897<br>
                대표 메일 : help@megahittoyou.com
            </p>
        </div>
    </section> --> 
    </body>
    <script>
        AOS.init();
    </script>
    <script>
        function onEvent(){
            $('html, body').stop().animate({ scrollTop: $("div#move").offset().top });
        }
    </script>
</html>
