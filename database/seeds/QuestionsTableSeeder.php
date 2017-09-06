<?php

use App\Question;
use App\subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable Foreign Key Constraint to truncate()
//        DB::statement('SET FOREIGN_KEY_CHECKS=0');
//
//        DB::table('questions')->truncate();
//
//        // Enable Foreign Key Constraint
//        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // "Computer"
        $subject_id = 1;

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'Which one of the following is secondary Memory?',
            'a' => 'RAM',
            'b' => 'Cache',
            'c' => 'Floppy Disk',
            'd' => 'ROM',
            'correct_option' => 'c',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'Algorithm is a:',
            'a' => 'Requirement document',
            'b' => 'Design document',
            'c' => 'Test document',
            'd' => 'User guide',
            'correct_option' => 'b',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'Which of the following short-cutkey is used to run a program in GW-BASIC:',
            'a' => 'F4',
            'b' => 'F3',
            'c' => 'F2',
            'd' => 'F1',
            'correct_option' => 'b',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'Which of the following statement temporarily stops execution of a program',
            'a' => 'BREAK',
            'b' => 'END',
            'c' => 'PAUSE',
            'd' => 'STOP',
            'correct_option' => 'b',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'For--NEXT is used to implement:',
            'a' => 'Iteration',
            'b' => 'Selection',
            'c' => 'Sequence',
            'd' => 'Both A&B',
            'correct_option' => '',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'Which statement is used to transfer the control un-conditionally:',
            'a' => 'For',
            'b' => 'While',
            'c' => 'GOTO',
            'd' => 'ON---GOTO',
            'correct_option' => 'c',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'How many Loops are in BASIC:',
            'a' => '2',
            'b' => '4',
            'c' => '5',
            'd' => '6',
            'correct_option' => '2',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'The statement X(30) will reserve --- memory locations:',
            'a' => '29',
            'b' => '30',
            'c' => '31',
            'd' => '32',
            'correct_option' => '30',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'Maximum numbers of elements per dimension is:',
            'a' => '10',
            'b' => '255',
            'c' => '32767',
            'd' => '300',
            'correct_option' => 'b',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'LEFT $("PAKISTAN", 3)=_______:',
            'a' => 'Pak',
            'b' => 'PAK',
            'c' => 'Pa',
            'd' => 'Kis',
            'correct_option' => 'b',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'Which short-cut key is used to bold a selected word:',
            'a' => 'Ctrl + B',
            'b' => 'Ctrl + E',
            'c' => 'Ctrl + C',
            'd' => 'Ctrl + D',
            'correct_option' => 'a',

        ]);

        DB::table('questions')->insert([
            'subject_id' => $subject_id,
            'question' => 'Ctrl + X is used for:',
            'a' => 'Copy',
            'b' => 'Cut',
            'c' => 'Paste',
            'd' => 'Redo',
            'correct_option' => 'a',

        ]);









    }
}
