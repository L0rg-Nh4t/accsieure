<?php 
    if($_SESSION['token'] != $user['token']) {
        session_destroy();
        header("Location: /");
        exit();
    }
?>
 <!DOCTYPE html>
<html lang="vi">
<head>

        <meta charset="utf-8"/>
<title><?php echo $title;?></title>
<link rel="shortcut icon" href="<?php echo $_admin['facebook'];?>" type="image/x-icon">
<!--- SEO TOP -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <!-- Từ Khóa -->
    <meta name="keywords" content="AS Mobile, Garena free fire vietnam , Polo free fire, Manhtg free fire, TVT - Free Fire, Gao Bạc Free Fire, Huyền Thoại Sinh Tồn - Free Fire Esports, Anh Hảo Free Fire, ViruSs Free Fire, GilGaming TV, Meow DGame, Phong Zhou Free Fire, Gill Free Fire, ShadowHP Free Fire, Bảo Hân TV, Conan Gaming, HUNGAKIRA MOBILE, NTN Gaming, Game Củ Tạ, Cô Ngân Tv, GAO BẠC TV, ANH FORD, Kelly Gaming TV, Nam Lầy, Meow DGame Streamer, SlenderMan, Hải Đăng Gamer, Lão Gió, hà Mon, BUSS Gaming, Rikaki Gaming, Black Ghost, Lưu Trung TV, Game One, TrollKid, Thành Mốc, NHN Troll, Na Gây Mê, C4 Gaming, Chipi Gaming, Cow TV, Thịnh LT Mobile, Sỹ Kẹo, Sĩ Toàn Gaming, iGAMING TV, Hà Anh TV, Bé Gấu TV, NamTe Gaming, Học Mõm, ThanhTran Polo, TheBeo TV, Mino TV, Thành Gaming TV, Nu Gaming, Khang Quỷ Dữ, Hoàng Zin, Tây Thành Dũng, Hoàng Bi, garena free fire vietnam, tvt free fire, gao bac free fire, huyen thoai sinh ton free fire esports, anh hao free fire, bao han tv, game cu ta, co ngan tv, gao bac tv, nam lay, hai dang gamer, lao gio, ha mon, luu trung tv, thanh moc, na gay me, thinh lt mobile, sy keo, si toan gaming, ha anh tv, be gau tv, hoc mom, thanh gaming tv, khang quy du, hoang zin, tay thanh dung, hoang bi, free fire, shop free fire, shop nick free fire, shop acc free fire, bán kim cương free fire, bán kc free fire, thử may free fire, bán nick free uy tín, bán nick free giá rẻ, acc free fire giá rẻ, vòng quay 9k free fire, shop acc ff, shop ff giá rẻ, shop nick ff, thử may ff 9k, thử may ff giá rẻ, thử may ff uy tín, ban kim cuong free fire, ban kc free fire, thu may free fire, ban nick free uy tin, ban nick free gia re, acc free fire gia re, vong quay 9k free fire, shop ff gia re, thu may ff 9k, thu may ff gia re, thu may ff uy tin,">
     <link rel="shortcut icon" href="" type="image/x-icon">
<script type="application/ld+json">
    {
          "@graph":
      [
          {
              "@context": "http://schema.org/",
              

                "@type":"Store",
                "image": "https://<?php echo $_title['name'];?>/upload-usr/images/M5bABgemf1_1578550759.png",
                "name":"<?php echo $_title['name'];?>",
                "address":{
                    "@type":"PostalAddress",
                    "streetAddress":"120 Thái Hà",
                    "addressLocality":"Q. Đống Đa",
                    "addressRegion":"Hà Nội",
                    "postalCode":"100000",
                    "addressCountry":"VN"
                 },
              "priceRange": "$$",
              "geo":{
                "@type":"GeoCoordinates",
                "latitude":21.011915,
                "longitude":105.821283
              },
              "telephone":"08.6969.3000"
            
            },
            {
              "@context": "http://schema.org",
              "@type": "WebSite",
              "name": "<?php echo $_title['name'];?>",
              "url": "https://<?php echo $_title['name'];?>"
          }
      ]
    }
</script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="/assets/frontend/theme/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/frontend/home/css/style.css" rel="stylesheet" type="text/css">
    <link href="/assets/frontend/theme/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/> 
     
    <script src="/assets/frontend/plugins/jquery/jquery-2.1.0.min.js"></script>
    <script src="/assets/frontend/plugins/jquery-cookie/jquery.cookie.js"></script>
    <link href="/assets/frontend/css/style.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="/assets/frontend/home/css/custom.css">
    <link href="/assets/frontend/home/css/swiper.css" rel="stylesheet">

    <script src="/assets/frontend/home/sweetalert.min.js"></script>
    <link rel="stylesheet" href="/assets/frontend/home/sweetalert.css">
    <script src="/assets/frontend/home/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/home/js/swiper.js"></script>
    <script src="/assets/frontend/home/js/boot.js"></script>
    <script src="/assets/frontend/home/functions.js"></script>

    <!-- END THEME STYLES -->
   

    <style>
    body{
        font-weight: 400 !important;color:#666;
    }
    .table > tbody + tbody{border-top: unset;}
        #imgcaptcha{
            max-width: initial;
        }
        .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .input-group-addon {
            background-color: #FAFAFA;
        }

        .input-group .input-group-btn > .btn, .input-group .input-group-addon {
            background-color: #FAFAFA;
        }

        .modal {
            text-align: center;
        }

        @media  screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .c-layout-header-fixed.c-layout-header-topbar .c-layout-page {
                margin-top: 245px;
            }
        }

        @media  screen and (max-width: 767px) {
            .modal-dialog:before {
                margin-top: 75px;
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }

            .modal-dialog {
                width: 100%;

            }

            .modal-content {
                margin-right: 20px;
            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;


        }

        .mfp-wrap {
            z-index: 20000 !important;
        }

        .c-content-overlay .c-overlay-wrapper {
            z-index: 6;
        }

        .z7 {
            z-index: 7 !important;
        }

        .sa-header{
            /*position: relative;*/
        }
    </style>

    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>  

<?php if($user['username']) { ?>
    <!-- PUSHER LIB BY KUNKEY -->
    <script type="text/javascript" src="/assets/Scripts/pusher.js"></script>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>

        <script type="text/javascript">
            var pusher = new Pusher('10d5ea7e7b632db09c72', {
                encrypted: true
            });
            var channel = pusher.subscribe('<?php echo $user['username'];?>');
            channel.bind('realtime', function (data) {
                    console.log(data.message);
                    if(data.message) {
                        if(data.type == 'success') {
                            reload_money();
                        }
                            swal(data.title, data.message, data.type);
                    }
                });
        </script>

<?php } ?>
<style type="text/css">
    input {
    color: #000000 !important;
}
input[type="text"] {
    color: #000000 !important;
}
</style>
</head>



<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">   
    <style type="text/css">
        body{
            background: #000;
            background: url("https://upanh.cf/vxc5smvx12.jpg");
              background-attachment: fixed;
              color: #dadada !important;
              background-size: 100%
        }
    </style>
                  

<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <style type="text/css">
#cfacebook {
    position: fixed;
    bottom: 0px;
    right: 10px;
    z-index: 999999999999999;
    width: 250px;
    height: 40px;
    box-shadow: 6px 6px 6px 10px rgba(0,0,0,0.2);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    overflow: hidden;
    background-color:#3a5795;
    line-height:40px;
    padding-left:50px;
}

#cfacebook .fchat {
    float: left;
    width: 100%;
    height: 350px;
    overflow: hidden;
    display: none;
    background-color: #fff;
}

    #cfacebook .fchat .fb-page {
        float: left;
    }

#cfacebook a.chat_fb {
    background: #3a5795 url() 225px 15px no-repeat;
    float: left;
    width: 250px;
    height: 40px;
    color: #fff;
    text-decoration: none;
    line-height: 40px;
    text-shadow: 0 1px 0 rgba(0,0,0,0.1);
    border: 0;
    border-bottom: 1px solid #133783;
    z-index: 9999999;
    font-size: 13px;
    text-align: center;
    text-transform: uppercase;
    padding:50px;
    padding-left:100px;
}

    #cfacebook a.chat_fb img {
        position: absolute;
        top: 10px;
        left: 10px;
    }

    #cfacebook a.chat_fb:hover {
        color: yellow;
        text-decoration: none;
    }
a.float-btn {
    background: #000;
    width: 180px;
    height: 41px;
    display: block;
    border: 2px solid #000;
    font-size: 17px;
    line-height: 34px;
    text-align: center;
    color: #fff;
    margin: 0 0 1px 0;
}
.float-menu {
    width: 179px;
    position: fixed;
    right: 0;
    top: 40%;
    z-index: 999;
    transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    -ms-transition: all ease 0.3s;
    -o-transition: all ease 0.3s;
    -webkit-transition: all ease 0.3s;
}

</style> 
    <div class="sa-header">
        <div class="container">
            <span class="sa-imn"><i class="fa fa-bars" aria-hidden="true"></i></span>
            <a class="sa-logo" href="/" title=""><img src="<?php echo $_logo['url'];?>" alt="" ></a>
            <ul class="sa-menu clearfix">
    
<ul  class="nav navbar-nav c-theme-nav">
    <li class=" "><a  rel=""  href="/index.html"  class=""><b>Trang chủ</b></a></li>
    <li class=" "><a  rel=""  href="/user/rutkimcuong"  class=""><b>Rút Kim Cương</b></a></li><li class=" "><a  rel=""  href="#"  class=""><b>Nạp tiền</b><span class="caret"></span></a>
    <ul id="children-of-41" class="dropdown-menu c-menu-type-classic c-pull-left " >
    <li class="c-menu-type-classic"><a  rel="" href="/user/napthe" class="">Nạp thẻ tự động</a></li>
    <li class="c-menu-type-classic"><a  rel="" href="/user/napthe" class="load-modal">Nạp tiền từ ATM/V&iacute; điện tử</a>
    </li>
    </ul>
    </li>
    <?php echo $btn_admin;?>
</ul>


</ul>

            <ul class="sa-login clearfix" style="margin-left: 10px">
                <li>
                    <a href="<?php echo $href_reg;?>"><?php echo $btn_reg;?></a></li>
                </li>
            </ul><ul class="sa-login clearfix">
                <li>
                    <a href="<?php echo $href_login;?>"><?php echo $btn_login;?></a></li>
                </li>
            </ul>
            <!-- <button class="btn-search">Tìm kiếm</button> -->
        </div>
    </div> <!-- END NARBAR -->

    <style>
.embed-container { position: relative; padding-bottom: 45.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style>
</header>
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: PAGE CONTAINER -->