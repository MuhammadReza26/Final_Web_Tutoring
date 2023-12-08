<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'Umur' => rand(20, 40),
            'Tempat_Lahir' => 'admin',
            'Tempat_Tinggal' => 'admin',
        ]);

        User::create([
            'name' => 'Teacher1',
            'role' => 'teacher',
            'email' => 'teacher1@teacher.com',
            'password' => bcrypt('teacher1'),
            'Umur' =>  rand(20, 40),
            'Tempat_Lahir' => 'Makassar',
            'Tempat_Tinggal' => 'NTI',
        ]);

        User::create([
            'name' => 'Teacher2',
            'role' => 'teacher',
            'email' => 'teacher2@teacher.com',
            'password' => bcrypt('teacher2'),
            'Umur' =>  rand(20, 40),
            'Tempat_Lahir' => 'Gowa',
            'Tempat_Tinggal' => 'BTP',
        ]);
        User::create([
            'name' => 'Student1',
            'role' => 'student',
            'email' => 'student1@student.com',
            'password' => bcrypt('student1'),
            'Umur' =>  rand(20, 40),
            'Tempat_Lahir' => 'Sidrap',
            'Tempat_Tinggal' => 'Rappang',
        ]);        
    }
}
