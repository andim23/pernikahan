<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('PernikahanModel'));
	}
	
	public function index() {
		$data=array(
			'page'=>'umumtemplate/contohisi',
			'link'=>'/',
			'link2'=>'home',
			'isi'=>$this->PernikahanModel->getRandomData()->result(),
			'jumlah'=>$this->PernikahanModel->listall()->num_rows()
		);
		$this->load->view('umumtemplate/wrapper',$data);
	}
	
	public function pencarian() {
		$data=array(
			'page'=>'umumtemplate/pencarian',
			'link'=>'/pencarian',
			'link2'=>'home',

			'isi'=>$this->PernikahanModel->getRandomData()->result(),

		
		);
		$this->load->view('umumtemplate/pencarian',$data);
	}
}
