<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Course::create([
            'course_name' => 'pengenalan Python',
            'description' => 'mempelajari Bahasa Pemrograman Phyton',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher2',
            'instructor_number'=>'81354791401',
        ]);

        Course::create([
            'course_name' => 'pengenalan JavaFX',
            'description' => 'mempelajari Bahasa Pemrograman JavaFX',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher2',
            'instructor_number'=>'81354791401',
        ]);

        Course::create([
            'course_name' => 'pengenalan HTML',
            'description' => 'mempelajari Bahasa Pemrograman HTML',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher1',
            'instructor_number'=>'82395123185',
        ]);

        Course::create([
            'course_name' => 'pengenalan laravel',
            'description' => 'mempelajari  laravel',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher1',
            'instructor_number'=>'82395123185',
        ]);
        
        Course::create([
            'course_name' => 'pengenalan php',
            'description' => 'mempelajari  php',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher2',
            'instructor_number'=>'81354791401',
        ]);

        Course::create([
            'course_name' => 'Data Science and Machine Learning with Python',
            'description' => 'Kursus ini fokus pada penggunaan Python dalam konteks data science dan machine learning. Peserta akan belajar tentang manipulasi data, visualisasi, statistika, serta pengenalan algoritma machine learning',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher1',
            'instructor_number'=>'82395123185',
        ]);

        Course::create([
            'course_name' => 'Full-Stack Web Development with Node.js and Express',
            'description' => 'Kursus ini membimbing peserta melalui pengembangan aplikasi web lengkap menggunakan Node.js dan Express. Topik-termasuk pembuatan RESTful API, integrasi basis data, dan pengelolaan server',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher2',
            'instructor_number'=>'81354791401',
        ]);

        Course::create([
            'course_name' => 'Mobile App Development with React Native',
            'description' => 'Kursus ini memperkenalkan peserta kepada pengembangan aplikasi seluler menggunakan React Native. Peserta akan belajar cara membuat aplikasi seluler cross-platform dengan menggunakan JavaScript dan React',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher1',
            'instructor_number'=>'82395123185',
        ]);

        Course::create([
            'course_name' => 'Blockchain Development with Solidity',
            'description' => 'Kursus ini mengeksplorasi pengembangan aplikasi blockchain dengan menggunakan bahasa pemrograman Solidity. Peserta akan memahami konsep dasar blockchain, kontrak pintar (smart contracts), dan pengembangan aplikasi terdesentralisasi',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher2',
            'instructor_number'=>'81354791401',
        ]);

        Course::create([
            'course_name' => 'Google IT Support Professional Certificate',
            'description' => 'Kursus ini diselenggarakan oleh Google dan mencakup dasar-dasar dukungan IT. Materi mencakup troubleshooting, sistem operasi, jaringan, keamanan, dan manajemen perangkat lunak',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher1',
            'instructor_number'=>'82395123185',
        ]);

        Course::create([
            'course_name' => 'Algorithms Specialization',
            'description' => 'Dikembangkan oleh Stanford University, kursus ini membahas algoritma dan desainnya. Termasuk topik seperti divide and conquer, dynamic programming, dan greedy algorithms',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher2',
            'instructor_number'=>'81354791401',
        ]);

        Course::create([
            'course_name' => 'IOS App Development with Swift',
            'description' => 'Kursus ini mengajarkan pengembangan aplikasi iOS menggunakan bahasa pemrograman Swift. Peserta akan memahami dasar-dasar pembuatan aplikasi untuk perangkat Apple',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher1',
            'instructor_number'=>'82395123185',
        ]);

        Course::create([
            'course_name' => 'Applied Data Science with Python Specialization',
            'description' => 'Kursus ini diselenggarakan oleh University of Michigan dan mencakup aplikasi praktis dari data science menggunakan Python. Materi melibatkan analisis data, machine learning, pengolahan teks, dan visualisasi data',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher2',
            'instructor_number'=>'81354791401',
        ]);

        Course::create([
            'course_name' => 'Deep Learning Specialization',
            'description' => 'Kursus ini dibuat oleh Andrew Ng dan fokus pada deep learning. Materi mencakup neural networks, deep learning frameworks, dan aplikasi deep learning dalam berbagai bidang',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher1',
            'instructor_number'=>'82395123185',
        ]);

        Course::create([
            'course_name' => 'Back-End Web Development with Django',
            'description' => 'Kursus ini menawarkan pandangan mendalam tentang pengembangan web berbasis back-end dengan menggunakan Django, salah satu framework web Python yang paling populer. Peserta akan belajar bagaimana membangun aplikasi web yang aman, skalabel, dan dapat dielola dengan menggunakan konsep dan alat-alat yang diberikan oleh Django',
            'start_date' => now(),
            'end_date' => now()->addmonth(),
            'instructor'=>'Teacher3',
            'instructor_number'=>'82395123185',
        ]);




        

        

        
    }
}
