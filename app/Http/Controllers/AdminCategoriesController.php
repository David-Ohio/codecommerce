<?php
	/**
	 * Created by PhpStorm.
	 * User: ohiod
	 * Date: 25/06/2016
	 * Time: 18:01
	 */
	
	namespace CodeCommerce\Http\Controllers;
	
	use CodeCommerce\Category;
	class AdminCategoriesController extends Controller
	{
		private $categories;

		/*
		 * Create a new controller instance
		 */
		public function __construct(Category $category)
		{
			$this->categories = $category;
		}
		
		public function index(){
			$categories = $this->categories->all();
			return view('categories', compact('categories'));
		}
	}