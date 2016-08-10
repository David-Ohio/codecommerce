<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//	Route::get(['get','post'], '/exemplo2', function(){
//		return "oi";
//	});
//	Route::any('/exemplo2',function (){
//
//	});

//	<form action="#" method=POST>
//		<input type="hidden" name="_method" value="PUT">
//		<input type="hidden" name="_token" value="{{csrf_token()}}">
//	</form>
	
	Route::group(['prefix'=>'admin'], function(){
		Route::group(['prefix'=>'products'], function(){
			Route::get('/', 'AdminProductsController@index');
			Route::get('products',['as'=>'products','uses'=>'ProductsController@index']);
			Route::post('products',['as'=>'products.store', 'uses'=>'ProductsController@store']);
			Route::get('products/create',['as'=>'products.create', 'uses'=>'ProductsController@create']);
			Route::get('products/{id}/destroy',['as'=>'products.destroy', 'uses'=>'ProductsController@destroy']);
			Route::get('products/{id}/edit',['as'=>'products.edit', 'uses'=>'ProductsController@edit']);
			Route::put('products/{id}/update',['as'=>'products.update', 'uses'=>'ProductsController@update']);
			Route::group(['prefix'=>'images'], function (){
				Route::get('{id}/product',['as'=>'products.images', 'uses'=>'ProductsController@images']);
				Route::get('create/{id}/product',['as'=>'products.images.create', 'uses'=>'ProductsController@createImage']);
				Route::post('store/{id}/product',['as'=>'products.images.store', 'uses'=>'ProductsController@storeImage']);
			});
			
		});
		Route::group(['prefix'=>'categories'], function(){
			Route::get('/', 'AdminCategoriesController@index');
			Route::get('categories',['as'=>'categories','uses'=>'CategoriesController@index']);
			Route::post('categories',['as'=>'categories.store', 'uses'=>'CategoriesController@store']);
			Route::get('categories/create',['as'=>'categories.create', 'uses'=>'CategoriesController@create']);
			Route::get('categories/{id}/destroy',['as'=>'categories.destroy', 'uses'=>'CategoriesController@destroy']);
			Route::get('categories/{id}/edit',['as'=>'categories.edit', 'uses'=>'CategoriesController@edit']);
			Route::put('categories/{id}/update',['as'=>'categories.update', 'uses'=>'CategoriesController@update']);
			
		});
	});

	/*Route::get('category/{id}', function($id)){
		$category = new \CodeCommerce\Category();
		$c = $category->find($id);

		return $c->name;
	});

	Route::get('category/{category}', function(\CodeCommerce\Category $category)){
		return $category->name;
	});

	/*
	 * Pode ser usado para namespace também
	 Route::group(['namespace'=>'App'], function(){
		Route::get('products', function(){
			return "Produtos";
		});
	});*/

	/*
	 * Pode ser usado com middleware também
        Route::group(['middleware'=>'admin|exemk|xpto'], function(){
			Route::get('products', function(){
				return "Produtos";
			});
		});*/
	/*
		Route::get('produtos-legais', ['as'=> 'produtos', function(){  // exemplo de nome na rota
			echo Route::currentRouteName();
			//return "Produtos";
		}]);

		redirect()->route('produtos');
		echo route('produtos');die;

		Route::pattern('id','[0-9]+'); //para usar um padrão definido a todas as rotas para o parâmetro id

		Route::get('user/{id?}', function($id = null){
			if($id)
				return "Olá $id";

			return "Não possui ID";
		})->where('id','[0-9]+');
		//})->where('id','[A-Za-z]+'); para que o valor seja de A a Z ou a a z
		// usar essas constraints é um meio de evitar injection


	Route::get('admin/categories', 'AdminCategoriesController@index');
	Route::get('admin/products', 'AdminProductsController@index');
	*/
	//Route::get('/', 'WelcomeController@exemplo');