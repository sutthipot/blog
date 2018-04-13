<?php
/**
 * Created by IntelliJ IDEA.
 * User: sutthipot
 * Date: 12/4/2018 AD
 * Time: 04:30
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id,Request $request)
    {
        //return $this->middleware('checkAge');
        $url = $request->all();
        return 'test >> '.$id.' >> '.$url;



        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}