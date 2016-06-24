<?php
/**
 * Created by PhpStorm.
 * User: ohiod
 * Date: 24/06/2016
 * Time: 14:02
 */

namespace CodeCommerce\Http\Controllers;


class WelcomeController extends Controller
{
    /**
     * Create a new controller instance
     */
    public function _construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('welcome');
    }
}