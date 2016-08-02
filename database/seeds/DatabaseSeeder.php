<?php

use Illuminate\Database\Seeder;
use database\seeds\CategoryTableSeed;
	use database\seeds\ProductTableSeed;
use database\seeds\UserTableSeed;
	
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $this->call(CategoryTableSeed::class);
	    $this->call(ProductTableSeed::class);
	    $this->call(UserTableSeed::class);
    }
}
