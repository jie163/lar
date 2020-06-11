<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ForgotPasswords;

class ForgotsPasswordController extends Controller
{
    use ForgotsPasswords;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm()
    {
    	return view('users.create');
    }
}