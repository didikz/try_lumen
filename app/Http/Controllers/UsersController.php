<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class UsersController extends BaseController {

	private $userModel;

	public function __construct(User $userModel)
	{
		$this->userModel = $userModel;
	}

	public function index()
	{
		$users = $this->userModel->all();
		return response()->json($users);
	}
}
