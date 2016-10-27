<?php

namespace App\Http\Controllers;

/**
* 
*/
class PagesController extends Controller
{
	public function getIndex()
	{
		return view('welcome');
	}

	public function getAbout()
	{
		$first = 'Augus';
		$last = 'Tsai';
		$email = "x820126@gamil.com";
		$fullname = $first . " " . $last;
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('about')->withData($data);
	}

	public function getContact()
	{
		return view('contact');
	}

}