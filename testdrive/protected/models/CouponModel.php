<?php
class CouponModel extends Coupon
{
  private $dsn = 'mysql:host=localhost;dbname=testdrive';
  private $user = 'root';
  private $pass = 'pass';

  // クーポンリスト取得
  public function selectCoupon()
  {
  	// DB接続
  	try {
  	    $pdo = new PDO($this->dsn, $this->user, $this->pass,
  			array(PDO::ATTR_EMULATE_PREPARES => false));
  	    $pdo->query('SET NAMES UTF8');
  	    $ret = $pdo->query('SELECT id, name FROM coupon ORDER BY public_ended DESC');
  	    return $ret;
  	} catch (PDOException $e) {
  		exit('データベース接続失敗。'.$e->getMessage());
  	}
  }
}
?>