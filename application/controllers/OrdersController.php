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
		$this->load->view('services/covidRTPCRcheckup');
	}
	public function basicHeathjCheckup(){
		$this->load->view('services/basicHeathjCheckup');
	}
	public function completeHealthCheckup(){
		$this->load->view('services/completeHealthCheckup');
	}
	public function lenLenCheckUp(){
		$this->load->view('services/lenLenCheckUp');
	}

	public function BookingProcess(){
		$this->load->view('order/BookingProcess');
	}
	public function  orderSummary(){
		$this->load->view('order/orderSummary');
	}

	public function serviceOrder($service_id,$rescheduleData = '')
	{
		if (!isset($service_id)) {
			redirect("/");
		}

		delete_cookie('unauthorized-service-order');
		$this->load->model("ServiceModel");
		$resultObject = $this->ServiceModel->getServiceDetails($service_id);

//		echo "<pre>";
//		print_R($resultObject);
//		die;




		$data = array("service_id" => $service_id);

		if ($resultObject->totalCount === 1) {
			$service_name = $resultObject->data->service_name;
			$actual_price = $resultObject->data->service_rate;
			$discount_price = $resultObject->data->discount;
			$sale_price = $resultObject->data->sale_price;
			$data["service_name"] = $service_name;
			$data["service_rate"] = $actual_price;
			$data["service_discount"] = $discount_price;
			$data["service_sale"] = $sale_price;
		}
		if ($rescheduleData !=''){
			$data['e_patient_name'] = $rescheduleData->patient_name;
			$data['e_patient_number'] = $rescheduleData->patient_number;
			$data['e_location'] = $rescheduleData->location;
			$data['e_schedule_date'] = $rescheduleData->schedule_date;
			$data['e_schedule_time'] = $rescheduleData->schedule_time;
			$data['e_orderPid'] = $rescheduleData->id;
			$data['e_userId'] = $rescheduleData->patient_id;
			$data['action'] = 'edit';
		}else{
			$data['e_patient_name'] = '';
			$data['e_patient_number'] = '';
			$data['e_location'] = '';
			$data['e_schedule_date'] = '';
			$data['e_schedule_time'] = '';
			$data['e_orderPid'] = '';
			$data['e_userId'] = '';
			$data['action'] = 'add';
		}
		$this->load->view('order/serviceOrder', $data);
	}


}
?>


