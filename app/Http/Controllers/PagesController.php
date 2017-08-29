<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	protected $layout = 'layout';
    public function index()
	{	
		return view('pages.home');
	}
	public function knowledge()
	{	
		return view('pages.knowledge');
	}
	public function strategies()
	{
		return view('pages.strategies');
	
	}
	public function news()
	{
		return view('pages.news');
	
	}
	public function events()
	{
		return view('pages.events');
	
	}
	public function resources()
	{
		return view('pages.resources');
	
	}
	public function directories()
	{
		return view('pages.directories');
	
	}
	public function classifieds()
	{
		return view('pages.classifieds');
	
	}
	public function jobs()
	{
		return view('pages.jobs');
	
	}
	public function blog()
	{
		return view('pages.blog');
	
	} 
}
