<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends Controller
{
    //

    public function register(Request $request) 
    {

        $userData = User::getUser($request->email);

        if(count($userData) == 0)
        {
           
           
            $user = User::create([
                    'name' => $request->input('name'),
                    'lastname' => $request->input('lastname'),
                    'position' => $request->input('position'),
                    'department' => $request->input('department'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password'))
                ]);


            return response($user, 201);


    
        }else {
            return response('User Already Exists!');
            
        }

        
      

    }



    public function login(Request $request) {
       if(!Auth::attempt($request->only('email','password'))){
           return response([
               'message' => 'Invalid Login'
           ], Response::HTTP_UNAUTHORIZED);
       }

       
       $user = Auth::user();

       $token = $user->createToken('token')->plainTextToken;

       $cookie = cookie('jwt', $token, 60 * 24); //1 day

       return response([
           'message' => $token
       ])->withCookie($cookie);

    }




    public function user(){
        return Auth::user();
    }




    public function logout()
    {
       $cookie = Cookie::forget('jwt');

       return response([
           'message' => 'Success'
       ])->withCookie($cookie);
    }



}
