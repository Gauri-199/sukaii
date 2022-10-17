<?php

require_once 'MasterModel.php';
class CustomerAddressModel extends MasterModel
{

	public function addAddress($data)
	{
		return $this->_insert("customer_address", $data);
	}

	public function getUserAddress($user_id, $type = "Home")
	{
		return $this->_select("customer_address", array("user_id" => $user_id, "status" => 1, "address_name" => $type));
	}
	public function getUserAllAddress($user_id)
	{
		return $this->_select("customer_address", array("user_id" => $user_id, "status" => 1),"*",false);
	}

	public function deleteAddress($id,$user_id)
	{
		return $this->_update("customer_address", array("status" => 0), array("id" => $id,"user_id"=>$user_id));
	}


}
