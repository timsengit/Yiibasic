<?php echo $this->render('/_include/common/top'); ?>
<?php
use yii\helpers\Html;
?>
<?php echo Html::cssFile('../static/style/style.css'); ?>
<?php echo Html::jsFile('../static/js/jquery.js'); ?>
<?php echo Html::jsFile('../static/js/index.js'); ?>
<div class="content">
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">
           <div><?=$aboutus['aboutus'];?></div>
        <a href="about_us.html" class="cBlue"> 查看更多...</a>
                <div class="hackbox"></div>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="productList.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_l">
            <?php foreach ($product as $row) {
    ;?>
        	<li>
                <span class="listimg">
                    <img src="../static/images/prod1.gif" class="blank" /><a href=<?php //echo "productInfo.php?productId=" . $row['id'];;;;;;;;;;?>><img src=<?=$row['pathOfPic'];?>  alt="222222" /></a>
                </span>
                <span class="listtxt"><a href=<?php //;;;?>><?=$row['name'];?></a></span>
            </li>
            <?php }
;?>
        </ul>
    </div>
    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
            <?php foreach ($news as $row) {
    ;?>
            <li>
			<a title='title' href='news'><?=$row['news'];?></a>
			<span class="time1"><?=$row['date'];?></span>
			</li>
            <?php }
;?>

        </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.html" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">
            <?php foreach ($info as $row) {
    ;?>
                <li><a title=<?=$row['title'];?> href="article.html"><?=$row['info'];?></a>
			<span class="time1"><?=$row['addTime'];?></span></li>
            <?php }
;?>


        </ul>
    </div>
    <?php echo $this->render('/_include/common/link'); ?>
    <?php echo $this->render('/_include/common/footer'); ?>
</div>


