<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrdersController extends CI_Controller{

public function patientdetails()
	{
		$this->load->view('order/BookingProcess');
	}

//	public function orderSummary()
//	{
//		$this->load->view('order/orderSummary');
//	}
	public function addCart()
	{
		$this->load->view('order/addCart');
	}


	// <!-- patientdetails -->

	public function covidRTPCRcheckup(){
		$this->load->view('package/covidRTPCRcheckup');
	}
	public function basicHeathjCheckup(){
		$this->load->view('package/basicHeathjCheckup');
	}
	public function completeHealthCheckup(){
		$this->load->view('package/completeHealthCheckup');
	}
	public function lenLenCheckUp(){
		$this->load->view('package/lenLenCheckUp');
	}

	public function BookingProcess(){
		$this->load->view('order/BookingProcess');
	}
	public function  orderSummary(){
		$this->load->view('order/orderSummary');
	}


}
?>


