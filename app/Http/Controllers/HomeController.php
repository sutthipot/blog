<?php
/**
 * Created by IntelliJ IDEA.
 * User: sutthipot
 * Date: 14/4/2018 AD
 * Time: 20:05
 */

namespace App\Http\Controllers;


class HomeController
{
    public function index(){
        return view('index',['i'=>'12321']);
    }
}