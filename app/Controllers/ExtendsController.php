<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ExtendsController extends BaseController {
	
	public function index() {
        $data['nickname'] = "Radit";
		$data['title'] = "Home";
        return view('home', $data);
    }
	
	// public function profile() { 
    public function profile(): string {
        $data['name'] = "Raditya Aji Sasmoyo";
        $data['nickname'] = "Radit";
        $data['npm'] = "2010631170111";
        $data['class'] = "Framework Pemograman Web";
        $data['phone'] = "+62 812-9026-4815";
        $data['email'] = "2010631170111@student.unsika.ac.id";
        $data['username'] = "raditya2010631170111";
		$data['title'] = "About Us";

        return view('about_us', $data);
		
		// Using var_dump for debugging
		var_dump($data);

		$this->load->view('about_us', $data);
	}
}
