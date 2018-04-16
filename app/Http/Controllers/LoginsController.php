<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Auth;
use Redirect;

class LoginsController extends Controller
{
    protected $table = 'login';

    public function index()
    {
        return Login::all();
    }

    public function show(Login $login)
    {
        return $login;
    }

    public function store(Request $request)
    {
        $login = Login::create($request->all());

        return response()->json($login, 201);
    }

    public function update(Request $request, Login $login)
    {
        $login->update($request->all());

        return response()->json($login, 200);
    }

    public function delete(Login $login)
    {
        $login->delete();

        return response()->json(null, 204);
    }

    public function login(Request $request)
    {
        $user = $request->post('user');
        $pass = $request->post('pass');

//        if (Auth::attempt(array('user' => $user, 'pass' => $pass))){
//            return "success";
//        }
//        else {
//            return "Wrong Credentials";
//        }
//        return;


        //$login = Login::select('select * from logins where 1 and user = '.$user, [1])->get();
        $login = Login::where('user', $user)->where('pass', $pass)->get(['id', 'name']);

        if(!$login->isEmpty()){
            return response()->json($login,200);
//            if(Auth::attempt(['user' => $user,'user' => $login[0]->name,'id' => $login[0]->id])){
//                return response()->json($login,200);
//            }else{
//                return response()->json([],200);
//            }
        }else{
            return response()->json($login,200);
        }

        //return response()->json($login, 200);

//        return Response::json(array(
//            'code'      =>  401,
//            'message'   =>  $message
//        ), 401);

    }
}
