<?php
/**
 * Created by IntelliJ IDEA.
 * User: sutthipot
 * Date: 12/4/2018 AD
 * Time: 03:20
 */

namespace App\Http\Controllers\Anth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\UserControl;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    //use UserControl;

    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function show()
    {
        return ' >> ok <<';
        //return view('user.pr ofile', ['user' => User::findOrFail($id)]);
    }
}