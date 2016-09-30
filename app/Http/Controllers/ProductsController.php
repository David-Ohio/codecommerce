<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ProductsController extends Controller
{
	private $productsModel;
	
	public function __construct(Product $product)
	{
		$this->productsModel = $product;
	}
	
	public function index(){
		
		$products = $this->productsModel->paginate(10);
		
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
	
	public function images($id){
		$product = $this->productsModel->find($id);
		return view('products.images', compact('product'));
	}
	
	public function createImage($id){
		$product = $this->productsModel->find($id);
		return view('products.create_image', compact('product'));
	}
	
	public function storeImage(Request $request, $id, ProductImage $productImage){
		$file = $request->file('image');
		$extension = $file->getClientOriginalExtension();
		$image = $productImage::create(['product_id'=>$id, 'extension'=>$extension]);
		Storage::disk('public_local')->put($image->id.'.'.$extension, File::get($file));
		$product = $this->productsModel->find($id);
		return view('products.images', compact('product'));
	}
}
