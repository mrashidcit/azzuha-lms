<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_programs')->truncate();


        DB::table('study_programs')->insert([
            'name' => 'BS Computer Science',
            'pre_requisite' => 'ICS, FSC',
            'description' => 'Computer Science studies',
            'duration' => '4',
        ]);

        DB::table('study_programs')->insert([
            'name' => 'BS Software Engineering',
            'pre_requisite' => 'ICS, FSC',
            'description' => 'Specialization in Software Engineering',
            'duration' => '4',
        ]);

        DB::table('study_programs')->insert([
            'name' => 'BBA',
            'pre_requisite' => 'FA, ICOM, ICS, FSC',
            'description' => 'Bacholar in Business Administration',
            'duration' => '2',
        ]);

        DB::table('study_programs')->insert([
            'name' => 'BA (Hons.)',
            'pre_requisite' => 'FA, ICOM, ICS, FSC',
            'description' => 'Bacholar in Business Administration',
            'duration' => '4',
        ]);

        
    }
}
