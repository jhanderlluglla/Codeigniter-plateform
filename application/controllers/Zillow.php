<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zillow extends CI_Controller {



	public function __construct() { 
      parent::__construct(); 
      $this->load->library("session");
      $this->load->helper('url');
   	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
	}

	public function search()
	{
		$address = $this->input->post('address');
		$citystate = $this->input->post('citystatezip');
		$zillow_id = 'X1-ZWz1gui2slwnpn_9wsfl'; 
		$address = urlencode($address);
		$citystatezip = urlencode($citystate);
		$result = "http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=$zillow_id&address=$address&citystatezip=$citystatezip";
		$ch = curl_init($result);
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,30);
		curl_setopt($ch, CURLOPT_TIMEOUT,60);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec( $ch );
		curl_close( $ch ); 
		$zdata = simplexml_load_string($response);
		$data['message']=$zdata->message->text;
		if ($data['message']=="Error: no exact match found for input address")
			{
               $this->session->set_flashdata('item', 'Warning: no exact match found for input address');
               redirect('/');
            }
        else
        {
			$data['address']=$zdata->request->address;
			$data['citystatezip']=$zdata->request->citystatezip;
			$data['amount']=$zdata->response->results->result->zestimate->amount;
			$data['latitude']=$zdata->response->results->result->address->latitude;
			$data['latitude']=$zdata->response->results->result->address->latitude;
			$data['longitude']=$zdata->response->results->result->address->longitude;
			$data['useCode']=$zdata->response->results->result->useCode;
			$data['yearBuilt']=$zdata->response->results->result->yearBuilt;
			$data['lotSizeSqFt']=$zdata->response->results->result->lotSizeSqFt;
			$data['bathrooms']=$zdata->response->results->result->bathrooms;
			$data['bedrooms']=$zdata->response->results->result->bedrooms;
			$data['lastSoldPrice']=$zdata->response->results->result->lastSoldPrice;
			$data['finishedSqFt']=$zdata->response->results->result->finishedSqFt;
			$datas['datas']= $data;
			$this->load->template('address', $datas);
		 } 
	}
}