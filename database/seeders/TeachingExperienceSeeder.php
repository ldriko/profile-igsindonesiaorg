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
                'course_name' => 'Kepemimpinan (Leadership)',
                'level' => 'Bachelor',
                'program' => 'UPN Veteran Jawa Timur All Study Programs',
                'institution' => 'UPN Veteran Jawa Timur',
                'academic_year' => '2021-2024',
            ],
            [
                'course_name' => 'Bela Negara (State Defending)',
                'level' => 'Bachelor',
                'program' => 'UPN Veteran Jawa Timur All Study Programs & Master of Information Technology',
                'institution' => 'UPN Veteran Jawa Timur',
                'academic_year' => '2021 to Present',
            ],
            [
                'course_name' => 'Pengenalan Pola (Pattern Recognition)',
                'level' => 'Bachelor',
                'program' => 'UPN Veteran Jawa Timur Department of Informatics',
                'institution' => 'UPN Veteran Jawa Timur',
                'academic_year' => '2021 - 2022',
            ],
            [
                'course_name' => 'Metode Penelitian (Research Methods)',
                'level' => 'Bachelor',
                'program' => 'UPN Veteran Jawa Timur Department of Informatics/Information System/Digital Business & Master of Information Technology',
                'institution' => 'UPN Veteran Jawa Timur',
                'academic_year' => '2021 to Present',
            ],
            [
                'course_name' => 'Sistem Informasi Manajemen Penerbangan (Aviation Management Information System)',
                'level' => 'Diploma',
                'program' => 'Air Transportation Management Study Programme -Politeknik Penerbangan Surabaya',
                'institution' => 'Politeknik Penerbangan Surabaya',
                'academic_year' => '2021 - 2023',
            ],
        ];

        foreach ($teachingExperiences as $teachingExperience) {
            $personalInfo->teachingExperiences()->create($teachingExperience);
        }
    }
}
