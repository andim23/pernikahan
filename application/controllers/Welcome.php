<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data=array(
			'page'=>'admintemplate/contohisi',
			'link'=>'dashboard'
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
}
