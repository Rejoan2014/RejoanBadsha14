<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reja extends CI_Model {


	public function getData()
	{
		//$this->load->view('welcome_message');
		return ['a'=>'learn', 'b'=>'hunter', 'c'=>'subscribe'];
	}
}
