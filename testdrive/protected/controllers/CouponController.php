<?php
// model
require_once dirname(__FILE__). './../models/CouponModel.php';
//require_once dirname(__FILE__). './../views/coupon/index.php';
class CouponController extends CController
{

	public function actionIndex()
	{
		$model = new CouponModel();
		$ret = $model->selectCoupon();
		$this->render('index', array(
				'ret'=>$ret,));
	}
}