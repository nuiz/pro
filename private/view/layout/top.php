<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1170, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo \Main\Helper\URL::absolute("/public/css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo \Main\Helper\URL::absolute("/public/js/bootstrap.min.js");?>"></script>
</head>
<body>

<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }

    .brand-bar img {
        height: 50px;
    }

    .brand-bar {
        background-color: white;
        padding: 10px;
        margin: 10px;
    }

    .pro-icon {
        font-size: 40px;
    }

    .pro-block, .pro-block a {
        color: white;
        font-size: 11px;
    }

    .pro-block {
        padding: 10px;
    }

    .brand-block {
        height: 180px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 brand-block" style="background: #BA0023;">
            <div class="text-center brand-bar"><img src="<?php echo \Main\Helper\URL::absolute('/public/images/bar/happy.png');?>"></div>
            <div class="row">
                <div class="col-md-3 text-center pro-block">
                    <a href="dtac_net">
                        <span class="glyphicon glyphicon-globe pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>แพ็กเกจเล่นเน็ต</span>
                    </a>
                </div>
                <div class="col-md-3 text-center pro-block">
                    <a href="dtac_tel">
                        <span class="glyphicon glyphicon-earphone pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>โปรเสริมค่าโทร</span>
                    </a>
                </div>
                <div class="col-md-3 text-center pro-block">
                    <a href="dtac_sms">
                        <span class="glyphicon glyphicon-envelope pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>SMS & MMS</span>
                    </a>
                </div>
                <div class="col-md-3 text-center pro-block">
                    <a href="dtac_music">
                        <span class="glyphicon glyphicon-music pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>เสียงเพลง</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 brand-block" style="background: #9AC700;">
            <div class="text-center brand-bar"><img src="<?php echo \Main\Helper\URL::absolute('/public/images/bar/ais.jpg');?>"></div>
            <div class="row">
                <div class="col-md-3 text-center pro-block">
                    <a href="ais_net">
                        <span class="glyphicon glyphicon-globe pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>แพ็กเกจเล่นเน็ต</span>
                    </a>
                </div>
                <div class="col-md-3 text-center pro-block">
                    <a href="ais_tel">
                        <span class="glyphicon glyphicon-earphone pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>โปรเสริมค่าโทร</span>
                    </a>
                </div>
                <div class="col-md-3 text-center pro-block">
                    <a href="ais_sms">
                        <span class="glyphicon glyphicon-envelope pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>SMS & MMS</span>
                    </a>
                </div>
                <div class="col-md-3 text-center pro-block">
                    <a href="ais_music">
                        <span class="glyphicon glyphicon-music pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>เสียงเพลง</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 brand-block" style="background: #D17E00;">
            <div class="text-center brand-bar"><img style="
            height: 24px;
            margin: 13px;" src="<?php echo \Main\Helper\URL::absolute('/public/images/bar/true.png');?>"></div>

            <div class="row">
                <div class="col-md-4 text-center pro-block">
                    <a href="true_net">
                        <span class="glyphicon glyphicon-globe pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>แพ็กเกจเล่นเน็ต</span>
                    </a>
                </div>
                <div class="col-md-4 text-center pro-block">
                    <a href="true_tel_sms">
                        <span class="glyphicon glyphicon-earphone pro-icon"><i class="fa fa-globe"></i></span>
                        <br><span>ค่าโทร & SMS</span>
                    </a>
                </div>
                <div class="col-md-4 text-center pro-block">
                    <a href="true_4g">
                        <img src="<?php echo \Main\Helper\URL::absolute('/public/images/bar/4g-icon.png');?>">
                        <br><span>โปรเน็ต 4G LTE</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>