<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">

        html {width: 100%; background-color: white; height: 800px; margin: 0;}
        body {width: 100%;background-color: white; height: inherit; margin: 0;}

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
li a:hover, .dropdown:hover .dropbtn {color: green;}
li.dropdown {display: inline-block;}
.dropdown-content {display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;z-index: 1;}
.dropdown-content a {color: black;margin-left: 15px;padding-top: 15px;padding-bottom: 5px;text-decoration: none;text-transform: capitalize;font-size: 18px;display: block;text-align: left;}
.dropdown:hover .dropdown-content {display: block;}

/*  container  */
.container {width: inherit;height: 300px;background-color: grey;}

    </style>
</head>
<body>
<div class="head">
    <img width="202" height="107" src="wp-content/themes/mht-selftheme/minhhanthinh_02.png">
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
