<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;

class LoginAPIController extends Controller
{
    //
    public function login(Request $req){
        $user = Users::where('email', $req->email)->where('password', md5($req->password))->first();
        if($user){
            $api_token = Str::random(64);
            $token = new Token();
            $token->userID = $user->userID;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            if($user->role == "pharmacist"){
                $token->role = "pharmacist";
            }
        
            $token->save();
            return $token;
        }
    }

    public function registration(Request $request)
    {
        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = md5($request->password);
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->save();
        return "Registration success";
    }
    public function  logout(Request $request){
        $token = Token::where('token',$request->token)->first();
        if($token){
            $token->expired_at = new DateTime();
            $token->save();
            return "Logout";
        }
    }
}