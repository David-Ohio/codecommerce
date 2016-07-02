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
		});
		Route::group(['prefix'=>'categories'], function(){
			Route::get('/', 'AdminCategoriesController@index');
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