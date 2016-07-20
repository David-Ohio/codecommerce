<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Product;


class ProductsController extends Controller
{
	private $productsModel;
	
	public function __construct(Product $product)
	{
		$this->productsModel = $product;
	}
	
	public function index(){
		
		$products = $this->productsModel->all();
		
	    return view('products.index', compact('products'));
    }
    
    public function create(){
    	return view('products.create');
    }
	
	public function store(ProductRequest $request){
		$input = $request->all();
		$input['featured'] = $request->get('featured') ? true : false;
		$input['recommended'] = $request->get('recommended') ? true : false;
		$product = $this->productsModel->fill($input);
		$product->save();
		return redirect()->route('products');
	}
	
	public function destroy($id){
		$this->productsModel->find($id)->delete();
		return redirect()->route('products');
	}
	
	public function edit($id){
		$product = $this->productsModel->find($id);
		return view('products.edit',compact('product'));
	}
	
	public function update(ProductRequest $request, $id){
		$input = $request->all();
		$input['featured'] = $request->get('featured') ? true : false;
		$input['recommended'] = $request->get('recommended') ? true : false;
		
		$this->productsModel->find($id)->update($input);
		return redirect()->route('products');
	}
}
