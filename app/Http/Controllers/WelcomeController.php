<?php
/**
 * Created by PhpStorm.
 * User: ohiod
 * Date: 24/06/2016
 * Time: 14:02
 */

namespace CodeCommerce\Http\Controllers;


use CodeCommerce\Category;

class WelcomeController extends Controller
{
    private $categories;
    /**
     * Create a new controller instance
     */
    public function __construct(Category $category){
        $this->middleware('guest');
        $this->categories = $category;
    }

    public function index(){
        return view('welcome');
    }
    public function exemplo(){
        $categories = $this->categories->all();
        return view('exemplo', compact('categories'));
    }
}