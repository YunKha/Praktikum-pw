<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Khaechal',
                'student_id_number' => 'F52123076',
                'email' => 'khaechal@gmail.com',
                'phone_number' => '6285348203913',
                'birth_date' => '2003-09-28',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Uswatun',
                'student_id_number' => 'F52123093',
                'email' => 'uswa@gmail.com',
                'phone_number' => '6285323412112',
                'birth_date' => '2003-08-09',
                'gender' => 'Female',
                'status' => 'Inactive',
                'major_id' => 2,
            ],
        ]);
    }
}
