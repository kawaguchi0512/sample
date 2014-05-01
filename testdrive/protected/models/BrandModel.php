<?php
class BrandModel extends Brand
{
	public function selectBrand($id) {

		$ret = BrandModel::model()
		    ->findByPk($id);
		return $ret;
	}
}