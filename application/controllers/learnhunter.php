<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learnhunter extends CI_Controller {


	public function index()
	{
		//$this->load->view('welcome_message');
		echo "Welcome to learnhunter";
	}

	public function show(){
		//echo "learnhunter another page";
		//$this->load->view('learn.php');
		//$this->load->view('sub/hunter.php');

		$this->load->Model('reja');
		$data = $this->reja->getData();

		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}


	public function hide(){
		$this->load->Model('reja');
		$data = $this->reja->getData();

		echo "<pre>";
		print_r($data);
		echo "</pre>";

		$this->load->view('learn.php');
	}

}
