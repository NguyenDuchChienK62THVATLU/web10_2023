<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student; 
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('students')->delete(); 
       $faker = Faker::create(); 
       for ($i = 0; $i < 10; $i++) {
        $student = new Student();
        $student->id = $i + 1;
        $student->name = $faker->name;
        $student->address = $faker->address;
        $student->phoneNumber = $faker->phoneNumber;
        $student->save();
    }
    }
}
