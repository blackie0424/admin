<?php namespace Blackie0424\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $message = 'Admin';
        return view('Admin::welcome',compact('message'));
	}

}
