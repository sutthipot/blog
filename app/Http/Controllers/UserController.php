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

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //return $this->middleware('checkAge');
        return 'test >> '.$id;



        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}