<?php
	/**
	 * Created by PhpStorm.
	 * User: ohiod
	 * Date: 25/06/2016
	 * Time: 18:17
	 */
	
	namespace CodeCommerce\Http\Controllers;
	

	use CodeCommerce\Product;

	class AdminProductsController extends Controller
	{
		private $product;
		public function __construct(Product $product)
		{
			$this->product = $product;
		}

		public function index(){
			$product = $this->product->paginate(10);
			return view('product', compact('product'));
		}
	}