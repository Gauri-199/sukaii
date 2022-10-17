

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrdersController extends CI_Controller{

	public function covidRTPCRcheckup(){
		$this->load->view('package/covidRTPCRcheckup');
	}
	public function basicHeathjCheckup(){
		$this->load->view('package/basicHeathjCheckup');
	}
	public function completeHealthCheckup(){
		$this->load->view('package/basicHeathjCheckup');
	}
	public function lenLenCheckUp(){
		$this->load->view('package/lenLenCheckUp');
	}
}
?>


