<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = factory(\App\Company::class, 150)->create([
            'category_id' => $this->getRandomCategoryId()
        ]);
    }
    private function getRandomCategoryId() {
        $category = \App\Category::inRandomOrder()->first();
        return $category->id;
    }
    
}
