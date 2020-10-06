<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('alumni','al');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function showAll()
	{
		print_r($this->al->getAlumni());
	}

	public function insert_data()
	{
		$data = array(
			'al_id' => " ",
			'al_name' => "่jirayuk",
			'al_lastname' => "sae-lim",
			'al_age'=> "20",
			'al_phone'=> "0847000256",
			'al_work'=> " ",
			'al_email'=> "614259004@webmail.npru.ac.th"	
		);
		$this->al->register($data);
	}

	public function Changwork()
	{
		$data = array(
			'al_id' => "11",
			'al_work'=> " Student"
		);
		$al_id = "614259004";
		$this->al->update_work($data,$al_id);
		
	}

	public function Changcontact()
	{
		$data = array(
			'al_phone' => "0804275489",
			'al_email'=> " def42784@gmail.com"
		);
		$al_id = "11";
		$this->al->update_contact($data,$al_id);
		
	}
}
