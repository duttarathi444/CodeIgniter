<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserModel extends CI_Model {
	public function usersignupData($data){
		$usersignup_query = "CALL usersignup_data('".$data['uname']."','".$data['pass']."','".$data['role']."')";
		$rs = $this->db->query($usersignup_query);
		if ($rs->num_rows() > 0)
		{
			$results=$rs->result_array();
			//$rs->next_result();
			$rs->free_result();
			return $results;
		}
		else
		{
			//$rs->next_result();
			$rs->free_result();
			return 0;
		}
	}

	public function usersigninData($data){
		$usersignin_query = "CALL usersignin_data('".$data['uname']."','".$data['pass']."')";

		$rs = $this->db->query($usersignin_query);
		if ($rs->num_rows() > 0)
		{
			$results=$rs->result_array();
			//$rs->next_result();
			$rs->free_result();
			return $results;
		}
		else
		{
			//$rs->next_result();
			$rs->free_result();
			return 0;
		}

	}

	public function book_add($data){
		$book_entry_query = "CALL book_entry('".$data['book_name']."','".$data['class']."','".$data['session']."','".$data['catego']."','".$data['image1']."','".$data['image2']."','".$data['image3']."','".$data['image4']."','".$data['image5']."')";
		$rs = $this->db->query($book_entry_query);
		if (1 > 0)
		{
			//$results=$rs->result_array();
			//print_r($results);
			//$rs->next_result();
			$rs->free_result();
			return 1;
		}
		else
		{
			//$rs->next_result();
			$rs->free_result();
			return 0;
		}
	}

 	public function book_retrive(){
 		$retrive_book = "CALL all_book()";
 		$rs = $this->db->query($retrive_book);
 		if ($rs->num_rows() > 0)
		{
			$results=$rs->result_array();
			///$rs->next_result();
			$rs->free_result();
			return $results;
		}
		else
		{
			//$rs->next_result();
			$rs->free_result();
			return 0;
		}
 	}

 	public function bookData($data){
 		$retrive_book = "CALL books(".$data['id'].")";
 		$rs = $this->db->query($retrive_book);
 		if ($rs->num_rows() > 0)
		{
			$results=$rs->result_array();
			//$rs->next_result();
			$rs->free_result();
			return $results;
		}
		else
		{
			//$rs->next_result();
			$rs->free_result();
			return 0;
		}
 	}

 	public function editBookData($data){
 		$book_edit_entry_query = "CALL bookEditEntry(".$data['id'].",'".$data['book_name']."','".$data['class']."','".$data['session']."','".$data['catego']."')";
		$rs = $this->db->query($book_edit_entry_query);
		if (1 > 0)
		{
			//$results=$rs->result_array();
			//print_r($results);
			// $rs->next_result();
			$rs->free_result();
			return 1;
		}
		else
		{
			// $rs->next_result();
			$rs->free_result();
			return 0;
		}
 	}

}