<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Account;
use Auth;

class HomeController extends Controller
{
    protected $authUser;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->authUser = Auth::user();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts= Account::where('user_id', $this->authUser['id'])->first();
        return view('home',compact('accounts'));
    }
}
