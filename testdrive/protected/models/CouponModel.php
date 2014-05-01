<?php
class CouponModel extends Coupon
{
  // クーポンリスト取得
  public function selectCoupon(){
    $couponList=CouponModel::model()->findAll();
  	return $couponList;
  }

  // クーポンIDをキーにクーポン情報を取得
  public function select($id){
  	$coupon = CouponModel::model()
  	    ->findByPk($id);
  	return $coupon;
  }
}