<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Account;

use Auth;

class AccountManagerController extends Controller
{

    protected $authUser;

    public function __construct(){
        $this->authUser = Auth::user();
    }
    //
    public function index(){
        $accounts= Account::where('user_id', $this->authUser['id'])->first();
        return view('user.account',compact('accounts'));

    }
    public function addNewAccount(){
        return view('user.addAccount');
    }

    public function storeNewAccount(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);

        $account = new Account([
            'account_name' => $request->input('name'),
            'country_code' => $request->input('lga'),
            'bank' => $request->input('facility_type'),
            'account_number' => $request->input('address'),
            'beneficiary_name' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
        ]);

        $account->save();
        return redirect()->route('home')->with("suc_msg", "Account was successfully added");

    }


}
