<?php

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = array("Editing","Interpersonal skills","Negotiation","Public speaking",
        "Teamwork","Technical writing","Training","Verbal communication","Written communication",
        "E-mail management","Microsoft Office","Research","Social media","Systems administration",
        "Web or graphic design","Windows and Mac OS","Attentive listening","Diplomacy","Marketing",
        "Negotiation","Patience","Sales","Troubleshooting","Conflict resolution","Delegation",
        "Problem-solving","Mentorship","Motivation","Team building","Team management",
        "Active listening","Creativity","Decision making","Research","Team building");

        foreach($skills as $skill) { 
	    	DB::table('skills')->insert([
	            'name' => $skill
	        ]);
        } 
    }
}
