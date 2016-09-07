<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/1
 * Time: 15:28
 */
use yii\helpers\Html;
?>
<p>You have entred the following information:</p>

<ul>
    <li><label>Name</label>:<?=Html::encode($model->name);?></li>
    <li><label>Email</label>: <?=Html::encode($model->email);?></li>
</ul>
