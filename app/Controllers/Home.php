<?php namespace App\Controllers;

class Home extends BaseController
{
	const VIEW_PATH = 'pages/home/';

	public function index()
	{
		$data['pageTitle'] = 'Home';
		
		return view(self::VIEW_PATH . 'index', $data);
	}

	//--------------------------------------------------------------------

}
