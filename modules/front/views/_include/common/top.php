<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>金陵贸易有限公司</title>
</head>
<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php echo Html::cssFile('../static/style/style.css'); ?>
<?php echo Html::jsFile('../static/js/jquery.js'); ?>
<?php echo Html::jsFile('../static/js/index.js'); ?>
<body>
<div class="header">
    <h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="../static/images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<div class="nav">
    <div class="nav_left"></div>
    <ul>
        <li><a href=<?php echo Url::toRoute('index/index'); ?>>首  页</a></li>
        <li><a href=<?php echo Url::to('?r=front/aboutus/aboutus'); ?>>公司简介</a></li>
        <li><a href=<?php echo Url::to('?r=front/product/productlist'); ?>>产品展示</a></li>
        <li><a href=<?php echo Url::to('?r=front/info/info'); ?>>行业资讯</a></li>
        <li class="sel"><a href=<?php echo Url::to('?r=front/geetbook/guestbook'); ?>>客户留言</a></li>
        <li><a href=<?php echo Url::to('?r=front/contactus/contactus'); ?> class="nobg">联系我们</a></li>
    </ul>
    <div class="time" id="myCanvas1"></div>
    <div class="nav_right"></div>
</div>
<div class="banner">
    <a href="#"><img src="../static/images/banner.jpg" align="banner" /></a>
</div>
