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

class LoginController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __construct()
    {

    }

    public function index(){
        return view('login');
    }

}