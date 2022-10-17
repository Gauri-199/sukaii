<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class OrdersController extends CI_Controller{

public function patientdetails()
	{
		$this->load->view('order/BookingProcess');
	}

	public function orderSummary()
	{
		$this->load->view('order/orderSummary');
	}
	public function addCart()
	{
		$this->load->view('order/addCart');
	}
}
?>
	<!-- patientdetails -->