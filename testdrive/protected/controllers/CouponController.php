<?php
class CouponController extends CController
{
	public function actionIndex()
	{
		// model
		require_once dirname(__FILE__). './../models/CouponModel.php';
		$model = new CouponModel();
		$ret = $model->selectCoupon();
		// view
		require_once dirname(__FILE__). './../views/site/index.php';
	}
}