<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['err'] = null;
		$this->load->view('login',$data);
	}

	public function usersignup()
	{
		$this->load->view('userSignup');
	}

	public function usersignupdata(){
		$this->load->model('UserModel');
		$data['uname'] = $_POST['uname'];
		$data['pass'] = $_POST['password'];
		$data['role'] = $_POST['role'];

		$data['result'] = $this->UserModel->usersignupData($data);
		if($data['result'])
		{
			$this->load->view('login',$data);
		}
		else{
			$this->load->view('userSignup',$data);
		}
	}

	public function usersignindata(){
		//$this->user_auth();
		$this->load->model('UserModel');
		$data['uname'] = $_POST['urname'];
		$data['pass'] = $_POST['pword'];
		$data['result'] = $this->UserModel->usersigninData($data);
		if(is_array($data['result']) == true && (sizeof($data['result'])) > 0){
			$this->load->view('book-module',$data);
		}else{
			$data['err'] = 'Incorrect Username or Password';
			$this->load->view('login',$data);
		}
	}

	public function books_lists(){
		//$this->user_auth();
		$this->load->model('UserModel');
		$data['result'] = $this->UserModel->book_retrive();
		// if(is_array($result) == true){
			// echo json_encode($result);
		// }
		//print_r($result);
		$this->load->view('book_master',$data);
	}

	public function book_add(){
		$data['edit'] = false;
		$this->load->view('book_registration',$data);
	}

	public function book_data(){
		$this->load->model('UserModel');
		$data['book_name'] = $_POST['book_name'];
		$data['class'] = $_POST['class'];
		$data['session'] = $_POST['session'];
		$data['catego'] = $_POST['catego'];
		$data['image1'] = $_POST['image1'];
		$data['image2'] = $_POST['image2'];
		$data['image3'] = $_POST['image3'];
		$data['image4'] = $_POST['image4'];
		$data['image5'] = $_POST['image5'];
		$data['result'] = $this->UserModel->book_add($data);
		$this->books_lists();
		// $this->load->view('book_master');
	}

	public function book_show(){
		// $data['da1'] = $_POST['da'];
		$this->load->model('UserModel');
		$result = $this->UserModel->book_retrive();
		if(is_array($result) == true){
			echo json_encode($result);
		}
	}

	public function viewBook(){
		$data['id'] = $this->input->get('id', TRUE);
		$this->load->model('UserModel');
		$data['result'] = $this->UserModel->bookData($data);
		if(is_array($data['result']) == true && (sizeof($data['result'])) > 0){
			$this->load->view('bookInfo',$data);
		}
	}

	public function editBook(){
		$data['id'] = $this->input->get('id', TRUE);
		$this->load->model('UserModel');
		$data['result'] = $this->UserModel->bookData($data);
		if(is_array($data['result']) == true && (sizeof($data['result'])) > 0){
			$data['edit'] = true;
			// print_r($data['result']);
			// print_r($data['edit']);
			$this->load->view('book_registration',$data);
		}
	}

	public function editData(){
		$data['id'] = $_POST['TS'];
		$data['book_name'] = $_POST['book_name'];
		$data['class'] = $_POST['class'];
		$data['session'] = $_POST['session'];
		$data['catego'] = $_POST['catego'];
		$this->load->model('UserModel');
		$data['result'] = $this->UserModel->editBookData($data);
		$this->books_lists();
	}

	// public function user_auth(){
	// 	// session_cache_limiter('private, must-revalidate');
 //  //       session_cache_expire(60);
	// 	// session_start();
 //        if(!isset($_SESSION['uname'])){
 //        	echo "hello";
	// 	$data['uname'] = $_POST['urname'];
	// 	$data['pass'] = $_POST['pword'];
	// 	$this->load->model('UserModel');
	// 	$rs = $this->UserModel->usersigninData($data);

	// 	if($rs) 
	// 	{
	// 		//$userdata = array('uname' => $rs[0]['username'],'pass' => $rs[0]['password']);


	// 		// $this->session->set_userdata($userdata);
	// 		// 	$data['uname'] =   $this->session->userdata('uname');
	// 		// 	$data['pass'] = $this->session->userdata('pass');
	// 		// 	echo isset($_SESSION['uname']);
	// 		$this->load->view('agent-module',$data);
	// 	}
	// 	else
	// 	{
	// 		redirect($base_url);
	// 	}
	// 		// if($rs)
	// 		// {
	// 		// 	foreach($rs as $result)
	// 		// 	{
	// 		// 		$ret_code = $result['login_status'];
	// 		// 		$role_id = $result['role_id'];
	// 		// 	}

	// 		// }
	// 	}
	// }

}