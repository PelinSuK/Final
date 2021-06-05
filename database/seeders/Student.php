<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name'=> 'Pelin',
            'surname' => 'Karabacak',
            'department' => 'Computer Engineer'
        ])
    }
}
