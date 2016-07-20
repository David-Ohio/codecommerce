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
	class CategoryTableSeed extends Seeder
	{
		public function run()
		{
			// TODO: Implement run() method.
			DB::table('categories')->truncate();
			
			Category::create([
				'name' => 'Category 1',
				'description'=> 'Description category 1'
			]);
		}
	}