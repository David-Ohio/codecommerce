<?php
	/**
	 * Created by PhpStorm.
	 * User: ohiod
	 * Date: 16/07/2016
	 * Time: 23:39
	 */
	
	namespace database\seeds;
	
	
	use Illuminate\Database\Seeder;
	use Illuminate\Database\Eloquent\Model;
	use CodeCommerce\Product;
	use Illuminate\Support\Facades\DB;
	use Faker\Factory as Faker;
	
	class ProductTableSeed extends Seeder
	{
		public function run()
		{
			// TODO: Implement run() method.
			//DB::table('categories')->truncate();
			
			factory('CodeCommerce\Product', 15)->create();
			
			/*foreach (range(1,15) as $i){
				Category::create([
					'name' => $faker->word(),
					'description'=> $faker->sentence()
				]);
			}*/
			
		}
	}