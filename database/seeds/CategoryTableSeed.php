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
	use CodeCommerce\Category;
	use Illuminate\Support\Facades\DB;
	use Faker\Factory as Faker;
	
	class CategoryTableSeed extends Seeder
	{
		public function run()
		{
			// TODO: Implement run() method.
			//DB::table('categories')->truncate();
			
			factory('CodeCommerce\Category', 15)->create();
			
			/*foreach (range(1,15) as $i){
				Category::create([
					'name' => $faker->word(),
					'description'=> $faker->sentence()
				]);
			}*/
			
		}
	}