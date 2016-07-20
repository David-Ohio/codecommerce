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
	use CodeCommerce\User;
	use Faker\Factory as Faker;
	use Illuminate\Support\Facades\Hash;
	
	class UserTableSeed extends Seeder
	{
		public function run()
		{
			// TODO: Implement run() method.
			DB::table('users')->truncate();
			
			$faker = Faker::create();
			
			foreach (range(1,15) as $i){
				User::create([
					'name' => $faker->name(),
					'email'=> $faker->email(),
					'email'=> Hash::make($faker->word())
				]);
			}
			
		}
	}