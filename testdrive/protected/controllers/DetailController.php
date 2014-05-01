<?php
class DetailController extends CController
{
    public function actionIndex() {

    	$form = new DetailForm();
    	$form->id=$_GET['id'];
    	$form->attributes=$_GET['id'];

    	if ($form->validate()) {
    		$id = $_GET['id'];
    		$model = new BrandModel();
    		$brand = $model->selectBrand($id);
    		$model = new CouponModel();
    		$coupon = $model->select($id);
    		$ret = ['brand' => $brand, 'coupon' => $coupon];
    		$this->render('index', ['ret' => $ret]);
    	} else {
    		$this->redirect(Yii::app()->user->returnUrl);
    	}
    }
}