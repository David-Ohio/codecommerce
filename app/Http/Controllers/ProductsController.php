<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Product;


class ProductsController extends Controller
{
	private $products;
	
	public function __construct(Product $product)
	{
		$this->products = $product;
	}
	
	public function index(){
		
		$products = $this->products->all();
		
	    return view('products.index', compact('products'));
    }
    
    public function create(){
    	return view('products.create');
    }
	
	public function store(ProductRequest $request){
		$input = $request->all();
		$product = $this->products->fill($input);
		$product->save();
		return redirect()->route('products');
	}
	
	public function destroy($id){
		$this->products->find($id)->delete();
		return redirect()->route('products');
	}
	
	public function edit($id){
		$product = $this->products->find($id);
		return view('products.edit',compact('product'));
	}
	
	public function update(ProductRequest $request, $id){
		$this->products->find($id)->update($request->all());
		return redirect()->route('products');
	}
}
