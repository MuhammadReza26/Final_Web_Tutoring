<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use function Ramsey\Uuid\v1;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Content::create([
            'title' => 'awal Phyton',
            'content' => 'Pengenalan Python'
        ]);

        Content::create([
            'title' => 'Phyton part 2',
            'content' => 'Pembahasan lebih lanjut mengenai Phyton'
        ]);

        Content::create([
            'title' => 'Phyton part 3',
            'content' => 'membuat sebuah desain dasar menggunakan bahasa pemrograman Phyton'
        ]);

        Content::create([
            'title' => 'awal Java',
            'content' => 'Pengenalan Java'
        ]);

        Content::create([
            'title' => 'Java part 2',
            'content' => 'pembahasan lebih lanjut mengenai java'
        ]);

        Content::create([
            'title' => 'Java part 3',
            'content' => 'membuat sebuah aplikasi dengan menggunakan bahasa pemrograman java'
        ]);

        Content::create([
            'title' => 'awal HTML',
            'content' => 'Pengenalan HTML'
        ]);

        Content::create([
            'title' => 'HTML part 2',
            'content' => 'mendesain website HTML dengan menggunakan CSS'
        ]);

        Content::create([
            'title' => 'HTML part 3',
            'content' => 'mendesain website HTML dengan menggunakan JavaScript'
        ]);

        Content::create([
            'title' => 'HTML last part',
            'content' => 'membuat website HTML dengan menggabungkan styling CSS dan JavaScript'
        ]);

        Content::create([
            'title' => 'awal laravel',
            'content' => 'pengenalan mengenai laravel'
        ]);

        Content::create([
            'title' => 'Laravel Part 2',
            'content' => 'materi laravel digabungkan dengan php'
        ]);

        Content::create([
            'title' => 'laravel part 3',
            'content' => 'menghubungkan laravel dengan database'
        ]);
        Content::create([
            'title' => 'laravel last part',
            'content' => 'membuat website laravel yang memiliki unsur database '
        ]);

        Content::create([
            'title' => 'awal php',
            'content' => 'Pengenalan PHP'
        ]);

        Content::create([
            'title' => 'php part 2',
            'content' => 'membuat PHP di bahasa pemrograman HTML'
        ]);

        Content::create([
            'title' => 'PHP last part',
            'content' => 'menghubungkan PHP dengan database'
        ]);

        Content::create([
            'title' => 'Data Science and Machine Learning with Python',
            'content' => 'Data Manipulation and Visualization'
        ]);

        Content::create([
            'title' => 'Data Science and Machine Learning with Python part 2',
            'content' => 'Statistical Concepts'
        ]);

        Content::create([
            'title' => 'Data Science and Machine Learning with Python part 3',
            'content' => 'Introduction to Machine Learning'
        ]);

        Content::create([
            'title' => 'Data Science and Machine Learning with Python last part',
            'content' => 'Implementing Machine Learning Algorithms'
        ]);

        Content::create([
            'title' => 'Full-Stack Web Development with Node.js and Express',
            'content' => 'Building RESTful APIs'
        ]);

        Content::create([
            'title' => 'Full-Stack Web Development with Node.js and Express part 2',
            'content' => 'Database Integration'
        ]);

        Content::create([
            'title' => 'Full-Stack Web Development with Node.js and Express part 3',
            'content' => 'Client-Side Development'
        ]);

        Content::create([
            'title' => 'Full-Stack Web Development with Node.js and Express last part',
            'content' => 'Authentication and Security'
        ]);

        Content::create([
            'title' => 'Mobile App Development with React Native',
            'content' => 'Introduction to React Native'
        ]);

        Content::create([
            'title' => 'Mobile App Development with React Native part 2',
            'content' => 'Building Cross-Platform Apps'
        ]);

        Content::create([
            'title' => 'Mobile App Development with React Native last part',
            'content' => 'State Management'
        ]);

        Content::create([
            'title' => 'Blockchain Development with Solidity',
            'content' => 'Understanding Blockchain'
        ]);

        Content::create([
            'title' => 'Blockchain Development with Solidity part 2',
            'content' => 'Smart Contracts with Solidity'
        ]);

        Content::create([
            'title' => 'Blockchain Development with Solidity last part',
            'content' => 'Decentralized Application Development'
        ]);
        Content::create([
            'title' => 'Back-End Web Development with Django',
            'content' => 'Pengenalan ke framework Django untuk pengembangan web back-end'
        ]);
        Content::create([
            'title' => 'Back-End Web Development with Django part 2',
            'content' => 'Desain model, tampilan, dan templat'
        ]);
        Content::create([
            'title' => 'Back-End Web Development with Django last part',
            'content' => 'Manajemen basis data dan keamanan'
        ]);
    }
}
