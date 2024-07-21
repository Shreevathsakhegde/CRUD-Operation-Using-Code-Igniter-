<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class welcome extends Controller
{
	public function index()
	{
		echo('welcome_message');
	}
}