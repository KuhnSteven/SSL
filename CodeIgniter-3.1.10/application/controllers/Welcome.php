<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->model('items');
		$data["items"] = $this->items->getItems();
		$this->load->view('welcome_message', $data);
	}

	public function addForm()
	{
		$this->load->view("addForm");
	}

	public function addAction()
	{		
		$this->load->model('items');
		$data["items"] = $this->items->addItem();
		// Redirect
		header("location:/index.php/welcome");

	}

	public function updateForm($id){
		$this->load->model('items');
		$selectedFruit = $this->items->getItem($id);
		$data["selectedFruit"] = array($selectedFruit);
		$this->load->view("updateForm", $data);
	}

	public function updateAction($id){
		$update = $this->db->update('fruit_table', $_POST, array('id'=>$id));
		// Redirect
		header("location:/index.php/welcome");
		return $update?true:false;
	}
}
