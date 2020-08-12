<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Content;

class ContentController extends Controller
{
	public function category(){

		return view('content.category');
	}

	public function article(){

		return view('content.article');
	}

	public function dashboard(){

		return view('content.dashboard');
	}





}