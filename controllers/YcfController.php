<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/1
 * Time: 15:44
 */
namespace app\controllers;

use yii\web\Controller;

class YcfController extends Controller
{
    //public $layout = 'common';
    public function actionIndex()
    {
        $front = \YII::$app->getModule('admin');
        $front->runAction('custom/greet');
        //$customer = Customer::find()->where(['name' => 'zs'])->one();
        //$orders   = $customer->hasMany('app\models\Order', ['customer_id' => 'id'])->asArray()->all();
        //$orders = $customer->getOrders();
        //print_r($orders);
        //$order    = Order::find()->where(['id' => 1])->one();
        //$customer = $order->customer;
        //print_r($customer);
        //查询数据
        // $sql    = 'select * from test2 where id=:id';
        // $result = Test2::findBySql($sql, array(':id' => 1))->all();
        //  print_r($result);
        //$results = Test2::find()->where(['id' => 1])->all();
        //$results = Test2::find()->where(['>', 'id', 0])->all();
        //id>=1 并且 id<2
        //$results = Test2::find()->where(['between', 'id', 1, 2])->all();
        //title
        //$results = Test2::find()->where(['like', 'title', 'sss'])->all();
        //$results = Test2::find()->where(['like', 'title', 'ss'])->asarray()->all();
        // foreach (Test2::find()->batch(1) as $tests) {
        //   print_R($tests);
        //}
        //$resutls = Test2::find()->where(['id' => 1])->all();
        //$resutls[0]->delete();
        //$test        = new Test2();
        //$test->id    = 'abc';
        //// $test->title = 'title';
        // $test->validate();
        //  if ($test->hasErrors()) {
        //    echo "error";
        //    die;
        //   }
        //$test->save();
        //修改数据
        //$test        = Test2::find()->where(['id' => 3])->one();
        //$test->title = 'title4';
        //$test->save();
        //print_r($results);
        //$request = \YII::$app->response;

        //$request->statusCode = 404;
        // $request->headers->add('pragma', 'max-age=5');
        //       $request->headers->remove('pragma');
        //$request->headers->add('location', 'http://www.baidu.com');
        //$this->redirect('http://www.baidu.com', 302);
        // $request->headers->add('content-disposition', 'attachment;filename="a.jpg"');
        // $request->sendFile('./robots.txt');
        //  $session = \YII::$app->session;
        //  $session->open();
        // if ($session->isActive) {
        //           echo 'session is active';
        //   }
        //  $session->set('user', 'zhangsan');
        //  echo $session->get('user');
        // $session->remove('user');
        // $cookies     = \YII::$app->response->cookies;
        //$cookie_data = array('name' => 'user', 'value' => 'zs');
        //$cookies->add(new Cookie($cookie_data));
        // //$cookies->remove('user');
        //$cookies = \YII::$app->request->cookies;
        // echo $cookies->getValue('user');
        // $helloStr = 'ssss<script>alert(3)</script>';
        // $arr      = array(1, 2);

        //数组
        // $data                   = array();
        // $data['view_hello_str'] = $helloStr;
        //$data['arr']            = $arr;
        //   return $this->renderPartial('index', $data);

        // return $this->renderPartial('index');
        //return $this->render('about'); //$content
    }

}
