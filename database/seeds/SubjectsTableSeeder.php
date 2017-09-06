<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable Foreign Key Constraint to truncate()
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        DB::table('subjects')->truncate();
        
        // Enable Foreign Key Constraint
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        DB::table('subjects')->insert([
            'name' => 'Computer',
            'description' => 'Native language',
        ]);

        DB::table('subjects')->insert([
            'name' => 'English',
            'description' => 'English Language',
        ]);

        DB::table('subjects')->insert([
            'name' => 'Physics',
            'description' => 'Computer Fundamentals',
        ]);


    }
}
