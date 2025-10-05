<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class TeachingExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personalInfo = PersonalInfo::first();

        if (! $personalInfo) {
            $this->command->warn('No PersonalInfo found. Please run PersonalInfoSeeder first.');

            return;
        }

        $teachingExperiences = [
            [
                'course_name' => [
                    'id' => 'Kepemimpinan',
                    'en' => 'Leadership',
                ],
                'level' => 'Bachelor',
                'program' => [
                    'id' => 'Semua Program Studi UPN Veteran Jawa Timur',
                    'en' => 'UPN Veteran Jawa Timur All Study Programs',
                ],
                'institution' => 'UPN Veteran Jawa Timur',
                'academic_year' => '2021-2024',
            ],
            [
                'course_name' => [
                    'id' => 'Bela Negara',
                    'en' => 'State Defending',
                ],
                'level' => 'Bachelor',
                'program' => [
                    'id' => 'Semua Program Studi UPN Veteran Jawa Timur & Magister Teknologi Informasi',
                    'en' => 'UPN Veteran Jawa Timur All Study Programs & Master of Information Technology',
                ],
                'institution' => 'UPN Veteran Jawa Timur',
                'academic_year' => '2021 to Present',
            ],
            [
                'course_name' => [
                    'id' => 'Pengenalan Pola',
                    'en' => 'Pattern Recognition',
                ],
                'level' => 'Bachelor',
                'program' => [
                    'id' => 'Program Studi Informatika UPN Veteran Jawa Timur',
                    'en' => 'UPN Veteran Jawa Timur Department of Informatics',
                ],
                'institution' => 'UPN Veteran Jawa Timur',
                'academic_year' => '2021 - 2022',
            ],
            [
                'course_name' => [
                    'id' => 'Metode Penelitian',
                    'en' => 'Research Methods',
                ],
                'level' => 'Bachelor',
                'program' => [
                    'id' => 'Program Studi Informatika/Sistem Informasi/Bisnis Digital UPN Veteran Jawa Timur & Magister Teknologi Informasi',
                    'en' => 'UPN Veteran Jawa Timur Department of Informatics/Information System/Digital Business & Master of Information Technology',
                ],
                'institution' => 'UPN Veteran Jawa Timur',
                'academic_year' => '2021 to Present',
            ],
            [
                'course_name' => [
                    'id' => 'Sistem Informasi Manajemen Penerbangan',
                    'en' => 'Aviation Management Information System',
                ],
                'level' => 'Diploma',
                'program' => [
                    'id' => 'Program Studi Manajemen Transportasi Udara - Politeknik Penerbangan Surabaya',
                    'en' => 'Air Transportation Management Study Programme - Politeknik Penerbangan Surabaya',
                ],
                'institution' => 'Politeknik Penerbangan Surabaya',
                'academic_year' => '2021 - 2023',
            ],
        ];

        foreach ($teachingExperiences as $teachingExperience) {
            $personalInfo->teachingExperiences()->create($teachingExperience);
        }
    }
}
