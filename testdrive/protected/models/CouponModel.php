<?php
class CouponModel extends Coupon
{
  // クーポンリスト取得
  public function selectCoupon()
  {
  	// DB接続
  	try {
		$couponList=CouponModel::model()->findAll();
  	} catch (CDbException $e) {
  		exit('データベース接続失敗。'.$e->getMessage());
  	}
  	return $couponList;
  }
}