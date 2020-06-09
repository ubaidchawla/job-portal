<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array('IT','Fashion','Medicine','Agriculture','Poultry','Dairy','Food','Textile');
        foreach($categories as $category) { 
	    	DB::table('categories')->insert([
	            'name' => $category
	        ]);
    	}    }
}
