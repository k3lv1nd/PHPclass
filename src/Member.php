<?php
//trait
namespace kelvin;
trait Member{

	public function isMember(){
	    return true;
    }
	public function addDiscount($sale) {
	    return $sale-($sale*0.02);

    }
}
?>