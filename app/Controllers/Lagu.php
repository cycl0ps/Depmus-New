<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lagu extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->model(array('Tabel_song'));
		
	}	

	public function index() {		
		
		$data['songlist'] = $this->Tabel_song->get(FALSE,'kunci ASC, judul ASC',FALSE);
		$data['keywords'] = "";
		$data['pageTitle'] 	= "Daftar Lagu Rohani";
		$data['body_page'] 	= "body/song/list";

		//echo var_dump($data);die;
		$this->load->view(THEME_SONGDB,$data);
	}

	public function detail($slug) {		
		
		$data['song'] = $this->Tabel_song->detail(array('slug'=> $slug));
		$data['keywords'] = str_replace("-",", ",$data['song']['slug']).", ";
		$data['pageTitle'] 	= $data['song']['judul'];
		$data['body_page'] 	= "body/song/detail";

		$this->load->view(THEME_SONGDB,$data);
	}

	public function api() {	
		
		$data['songlist'] = $this->Tabel_song->get(FALSE,'kunci ASC, judul ASC');
		
		header('Access-Control-Allow-Origin: *');
		header('Content-type: application/json');
		echo json_encode($data['songlist']);
	}	
}
