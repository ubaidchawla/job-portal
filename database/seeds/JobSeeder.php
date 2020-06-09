<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = factory(App\Job::class, 5)->create([
            'company_id' => $this->getRandomCompanyId()
        ]);
    }
    private function getRandomCompanyId() {
        $company = \App\Company::inRandomOrder()->first();
        return $company->id;
    }
}
