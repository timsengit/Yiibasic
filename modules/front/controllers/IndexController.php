<?php

namespace app\modules\front\controllers;

use app\models\Aboutus;
use app\models\Info;
use app\models\News;
use app\models\Product;
use yii\web\Controller;

/**
 * Default controller for the `front` module
 */
class IndexController extends Controller
{
    public $layout = false;
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
//取得关于我们并剪切字符串
        $aboutus            = Aboutus::find()->where(['id' => 1])->asArray()->one();
        $aboutus['aboutus'] = substr($aboutus['aboutus'], 0, 39) . "...";
//取得新闻数组并剪切
        $news = News::find()->asArray()->all();
        foreach ($news as $new1) {
            $new1['news'] = substr($new1['news'], 0, 39) . "...";
        }
        //取得产品数组
        $product = Product::find()->asArray()->all();
        //取得资讯数组
        $info               = Info::find()->asArray()->all();
        $toindex            = array();
        $toindex['aboutus'] = $aboutus;
        $toindex['news']    = $news;
        $toindex['product'] = $product;
        $toindex['info']    = $info;
        // echo \Yii::$app->basePath;
        return $this->renderPartial('index', $toindex);
    }
}
