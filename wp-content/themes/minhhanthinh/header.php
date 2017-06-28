<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel='stylesheet' id='mui-css-css'  href='https://cdnjs.cloudflare.com/ajax/libs/muicss/0.9.14/css/mui.min.css?ver=4.7.5' type='text/css' media='all' />

<link rel='stylesheet' id='owl-carousel-css-css'  href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css?ver=4.7.5' type='text/css' media='all' />

<script type='text/javascript' src='wp-content/themes/minhhanthinh/js/jquery.js'></script>
    <script type='text/javascript' src='wp-content/themes/minhhanthinh/js/wonderpluginslider.js'></script>
    <title>MHT Construction</title>
    <style type="text/css">

        html {width: 100%; background-color: white; height: auto; margin: 0;}
        body {width: 100%;background-color: white; height: inherit; margin: 0;font: 400 15px Roboto, Arial, sans-serif;}

/*  Menu and Image  */
        .head {margin: 0 auto; height: 107px;}
        .head img {float: left;flex-wrap: wrap; margin-left: 90px; margin-top: 0;}
        .head .head_menu {float: right; }
        .head .menu-item {float: left; width: 70%; padding-left: 65px; margin-top: 45px;}

/*  Menu  */
        .head-menu ul {list-style-type: none;margin: 0;padding: 0;overflow: hidden;}
        .head-menu li {float: left;}
        .homepage a {color: green;margin-left: 25px;}
        li a, .dropbtn {display: inline-block;color: black;margin-right: 25px;text-align: center;text-decoration: none;text-transform: uppercase;}
        li a:hover, .dropdown:hover .dropbtn {color: green;text-decoration: none;}
        li.dropdown {display: inline-block;}
        .dropdown-content {display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;z-index: 1;}
        .dropdown-content a {color: black;margin-left: 15px;padding-top: 15px;padding-bottom: 5px;text-decoration: none;text-transform: capitalize;font-size: 16px;display: block;text-align: left;}
        .dropdown:hover .dropdown-content {display: block;}

/*  Container  */
        .container {clear: both;width: 1440px;height: auto;}
        .wonderplugin_slider {width: inherit;margin-left: 0px;}

/*  Function Div  */
        .function-div-outside {width: 100%; height: 210px;background-color: white;display: flex;}
        .function-div {width: 80%;margin: 0 auto;position: relative;top: -153px;}
        .function-child {float: left;width: 30%;overflow: hidden;margin-left: 30px;}
        .function-description {background-color: green;color: white;height: 153px;opacity: 0.9;}
        .function-description-title {text-align: center;font-size: 18px;font-weight: bold;height: 56px;vertical-align: middle;line-height: 56px;padding-top: 8px; padding-bottom: 6px;}
        .function-description-title-3 {line-height: 28px;}
        .function-description-excerpt {padding-bottom: 5px;text-align: center;font-size: 13px;padding-top: 5px;}
        .function-image {height: 176px;margin: 0px;opacity: 0.8;}
        .function-image:hover {opacity: 1;}

/*  Materials Div  */
        .materials-div {height: 422px;background-image: url("wp-content/themes/minhhanthinh/sec2-bg.png");}
        .materials-div h3 {text-transform: uppercase;font-weight: bold;font-size: 20px;text-align: center;}
        .materials-tab {text-align: center;height: 50px;box-shadow: none;overflow: hidden; box-shadow: none;
  border-radius: 0;}
        .materials-tab:focus {background-color: green;}
        .material-item {float: left;}
        .material-attachment {margin-left: 10px;margin-left: 20px;}
        .material-title {text-align: center;color: black;}
        .material-title:hover {}
        .material {margin-left: 50px;margin-right: 200px;}

/*  Project Div   */
        .project-div-outside {width: 100%;height: 513px;background-color: white;}
        .project-div-outside h3 {text-transform: uppercase;text-align: center;color: green;font-size: 30px;padding-top: 40px;}
        .project-all-div {margin-left: 130px;}
        .project-div {width: 288.75px;float: left;}
        .project-div-p {text-transform: uppercase;color: white;position: relative;top:-150px;height: 0px;}
        .project-image {width: inherit;overflow: hidden;transition: opacity 0.5s;margin-left: 5px;}
        .project-image:hover {opacity: 0.5;}
        .project-image-1 {height: 152.41px;}
        .project-image-2 {height: 430.41px;padding-top: 5px;}
        .project-image-3 {height: 387.91px;}
        .project-image-4 {height: 191.41px;}
        .project-image-5 {height: 191.41px;padding-top: 5px;}
        .project-image-6 {height: 235.41px;}
        .project-image-7 {height: 147.41px;padding-top: 5px;}

/*  Custommer and News Div   */
        .customer-new-div {width: 100%;height: 634px;background-image: url("wp-content/themes/minhhanthinh/sec4-bg.png");}



/*  Footer Div   */
        .footer-div {width: 100%;height: 352px;background-image: url("wp-content/themes/minhhanthinh/footer-bg.png");}


    </style>
    <script>
    function openMaterial(materialName) {
        var i;
        var x = document.getElementsByClassName("material");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        document.getElementById(materialName).style.display = "block";
    }
    </script>
</head>
<body>
<div class="head">
    <img width="202" height="107" src="wp-content/themes/minhhanthinh/minhhanthinh_02.png">
    <div class="head-menu">
        <div class="menu-item">
            <ul>
              <li class="homepage"><a href="#">Trang chủ</a></li>
              <li><a href="#">Giới thiệu</a></li>
              <li><a href="#">Dịch vụ</a></li>
              <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Sản phẩm</a>
                <div class="dropdown-content">
                  <a href="#">Gạch ốp lát</a>
                  <a href="#">Bột sơn hoàn thiện</a>
                  <a href="#">Thiết bị vệ sinh</a>
                </div>
              </li>
              <li><a href="#">Dự án thực hiện</a></li>
              <li><a href="#">Tin tức</a></li>
              <li><a href="#">Tuyển dụng</a></li>
              <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</div>

