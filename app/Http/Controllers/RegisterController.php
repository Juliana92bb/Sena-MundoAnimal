<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ForgePasswordEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    private $emailUser = "";

    public function index(){

        return view('auth.forge-password');
    }

    public function email(Request $request){

        $email = new ForgePasswordEmail();

        Mail::to($request->email)->send($email);

        $this->emailUser = $request->email;
        dd($this->emailUser);
    }

    public function urltemp(){

        $url = URL::temporaryUrl('forge', now()->addMinutes(2));

    }

    public function forge(Request $request){
        return view('auth.form');
    }

    public function form(Request $request){
        dd($this->emailUser);
        if(!empty($emailUser)){
            $user = User::query()->where('username', $emailUser);

            $user->password = Hash::make($request->password);
            if($user->save()){
                return redirect()->route('login');
            }
        }

    }
}
