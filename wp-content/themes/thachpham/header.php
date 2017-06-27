<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
 
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmgp.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <style>
/*---:[PRIMARY MENU]:---*/
.primary-menu:after {
        display: table;
        content: " ";
        clear: both;
}
.primary-menu ul{
        border: 1px solid #000000;
        -moz-box-shadow: inset 1px 1px 0 rgba(255, 255, 255, 0.2);
        -webkit-box-shadow: inset 1px 1px 0 rgba(255, 255, 255, 0.2);
        box-shadow: inset 1px 1px 0 rgba(255, 255, 255, 0.2);
        background: #565656;
        background: -moz-linear-gradient(#565656 0%, #323232 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #565656), color-stop(100%, #323232));
        background: -webkit-linear-gradient(#565656 0%, #323232 100%);
        background: linear-gradient(#565656 0%, #323232 100%);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        width: 100%;
}
.primary-menu ul li,
.primary-menu ul li ul li {
        -moz-box-shadow: inset 1px 1px 0 rgba(255, 255, 255, 0.2);
        -webkit-box-shadow: inset 1px 1px 0 rgba(255, 255, 255, 0.2);
        box-shadow: inset 1px 1px 0 rgba(255, 255, 255, 0.2);
        background: #565656;
        background: -moz-linear-gradient(#565656 0%, #323232 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #565656), color-stop(100%, #323232));
        background: -webkit-linear-gradient(#565656 0%, #323232 100%);
        background: linear-gradient(#565656 0%, #323232 100%);
}
.primary-menu ul li a {
        color: #f7f7f7;
        border-top: none;
        border-left: none;
}
.primary-menu ul li a:hover,
.primary-menu ul li.sfHover  {
        background: #555555;
}
.primary-menu ul li ul {
        width: auto;
}



body {
        width: 1440px;
        margin: 0px;
}


#container {
        width: 1440px;
        margin: 0 auto;
        background :#ffffff;
        border: 1px solid #D1D1D1;
        padding: 10px 25px;
}
.content {
        overflow: hidden;

}
#slideshow {
        border: 1px solid #D1D1D1;
}

#khoi_threediv {
        float: left;
}

.bakhoicon {
        float: left;
        width: 30%;
        height: 450px;
        margin-left: 10px;
}

#greenback {
        background-color: green;
}

.vatlieuhoanthien {
}

#vatlieuhoanthien h2 {
        text-align: center;
}

.bakhoivatlieu {
        width: auto;
        height: 55px;
        padding-left: 150px;
}

.vatlieuhoanthien .bakhoivatlieu .vatlieu {
        width: 30%;
        height: 50px;
        background-color: black;
        float: left;
        text-align: center;
        margin-left: 10px;
        padding-top: 20px;
}
.vatlieuhoanthien .bakhoivatlieu .vatlieu:hover {
        background-color: green;
}

.vatlieu a {
        text-decoration: none;
        color: white;
}

.bonsanpham {
        margin-top: 100px;
}
.khoi_sanpham {
        width: 20%;
        float: left;
        position: relative;
        padding-top: 30px;
        border: 1px black solid;
}
.anh_sanpham {}

.ten_sanpham {text-align: center;}

#duan_h2 {
        text-align: center;
}

.bon_khoi_anh {
          max-width: none;
          height: 150px;
}

.bon_khoi_anh_image {


        height: inherit;

}

.khoi-3 {
  padding: 0px 15px;
  background: linear-gradient(to left, #f5f5f5, #fcfcfc); }
  .khoi-3 .du-an-tieu-bieu {
    font-size: 30px;
    font-weight: bold;
    color: #3cb44a;
    text-transform: uppercase;
    text-align: center;
    margin: 52px 0px 40px; }
  .khoi-3 .service {
    margin-top: 0px; }
  .khoi-3 p {
    line-height: 2; }
  .khoi-3 .news-card {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between; }
    .khoi-3 .news-card > div {
      flex-basis: calc(50% - 12px); }
  .khoi-3 .album-anh {
    margin: 0px -2.5px;
    display: flex;
    flex-flow: column wrap; }
    @media screen and (min-width: 37.5em) {
        .khoi-3 {
            padding: 0;
        }
      .khoi-3 .album-anh {
        height: 393px; } }
    .khoi-3 .album-anh .thu-tu-anh {
      position: relative;
      overflow: hidden;
      height: 150px;
      margin-bottom: 15px;
      flex-grow: 1; }
      .khoi-3 .album-anh .thu-tu-anh .khoi-anh {
        height: inherit; }
        .khoi-3 .album-anh .thu-tu-anh .khoi-anh img {
          max-width: none;
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%); }
      .khoi-3 .album-anh .thu-tu-anh a:hover .news-container {
        opacity: 1; }
      .khoi-3 .album-anh .thu-tu-anh .news-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 99;
        background: rgba(0, 0, 0, 0.35);
        opacity: 0;
        transition: 0.3s linear all;
        padding: 20px 30px; }
        .khoi-3 .album-anh .thu-tu-anh .news-container h3 {
          margin: 0px;
          font-size: 17px;
          text-transform: uppercase;
          color: #fff;
          font-weight: bold; }
      @media screen and (min-width: 37.5em) {
        .khoi-3 .album-anh .thu-tu-anh.anh-thu-1 {
          height: 152px; }
        .khoi-3 .album-anh .thu-tu-anh.anh-thu-2 {
          height: 230px; }
        .khoi-3 .album-anh .thu-tu-anh.anh-thu-3 {
          height: 388px; }
        .khoi-3 .album-anh .thu-tu-anh.anh-thu-4 {
          height: 190px; }
        .khoi-3 .album-anh .thu-tu-anh.anh-thu-5 {
          height: 190px; }
        .khoi-3 .album-anh .thu-tu-anh.anh-thu-6 {
          height: 235px; }
        .khoi-3 .album-anh .thu-tu-anh.anh-thu-7 {
          height: 147px; } }
      @media screen and (min-width: 37.5em) {
        .khoi-3 .album-anh .thu-tu-anh {
          width: calc(100% / 4 - 5px);
          margin: 2.55px; } }



#khoidoi {clear: both;}
.khoidoi {
        width: 48%;
        float: left;
}

.canhan {
        clear: both;
        padding-top: 20px;
}
.anhcanhan {
        width: 20%;
        float: left;
}

.arrow-left {
        width:25px;
        height:0px;
        border-bottom:20px solid transparent;
        border-top:20px solid transparent;
        border-right:30px solid grey;
        float: left;
        margin-top: 25px;
  }

.ykien {
        border: 1px black transparent;
        border-radius: 25px;
        width: 60%;
        float: left;
        padding-right: 5px;
        font-size: 9;
        background-color: grey;
    }

.baivietnoibat {
        clear: both;
        padding-top: 20px;
}
.tinnoibat_image {
        width: 20%;
        float: left;
}
.tinnoibat_chu {
        width: 60%;
        margin-top: 5px;
        float: right;
}
.tinnoibat_chu a {
        font-size: 0.65em;
        color: red;
        text-decoration: none;
}
.tinnoibat_noidung {

}
#footer_div {
        clear: both;
}
.thongtin_map {
        height: 250px;
        background-color: grey;
}
#thongtinlienhe {
        width: 48%;
        float: left;
}

#thongtinlienhe h3 {
        color: white;
}

.thongtincon {
        padding-top: 20px;
        color: white;
        font-size: 0.8em;
        font-weight: bold;
}

.thongtincon img {
        float: left;
}

.thongtincon span {
        float: left;
        margin-left: 10px;
}

#google_map {
        margin-top: 30px;
        margin-right: 20px;
        float: right;
}
.copyright {
        padding-top: 20px;
        text-align: center;
        color: white;
        height: 50px;
        background-color: green;
}






        </style>
        <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?> > <!--Thêm class tượng trưng cho mỗi trang lên <body> để tùy biến-->
    <div id="container">
		<header id="header">
            <div class="logo">
		 	  <img src="wp-content\uploads\logo.jpg" height="50px">
		    </div>
		    <?php thachpham_menu( 'primary-menu' ); ?>
		</header>