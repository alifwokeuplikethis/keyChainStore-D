<?php namespace App\Controllers;
use App\Models\UsersModel;

class Pages extends BaseController
{
	public function index()
	{
		echo view("index");
	}
	public function login()
	{
		echo view("login");
	}
}