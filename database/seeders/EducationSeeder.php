<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
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

        $educations = [
            [
                'level' => 'S1',
                'institution' => 'ITATS (Institut Teknologi Adhi Tama Surabaya)',
                'department' => 'Electrical Engineering',
                'graduation_year' => 1993,
                'thesis_title' => 'Sistem Pengaturan Temperatur Dengan Menggunakan Kontrol PID (Temperature Control System Using PID Control)',
                'advisor' => 'Ir. Paulus Karmain',
            ],
            [
                'level' => 'S2',
                'institution' => 'ITS (Institut Teknologi Sepuluh November Surabaya)',
                'department' => 'Informatics Engineering',
                'graduation_year' => 2000,
                'thesis_title' => 'Rancang Bangun Perangkat Lunak Sistem Pengaturan Dengan Modeling Objek (Management System Software Design with Object Modeling)',
                'advisor' => 'Prof. Dr. Ir. Drs.ec. Riyannarto Sarno, Phd',
            ],
            [
                'level' => 'S3',
                'institution' => 'ITS (Institut Teknologi Sepuluh November Surabaya)',
                'department' => 'Electrical Engineering',
                'graduation_year' => 2019,
                'thesis_title' => 'Identifikasi Ketidaknormalan Motiliti Spermatozoa Menggunakan Metode Support Vector Machine Dan Logika Fuzzy (Identification of Abnormal Spermatozoa Motility Using Support Vector Machine Method and Fuzzy Logic)',
                'advisor' => 'Prof. Dr. Mauridhi Hery Purnomo, M.Eng, Dr. I Ketut Eddy Purnama, ST., MT.',
            ],
        ];

        foreach ($educations as $education) {
            $personalInfo->educations()->create($education);
        }
    }
}
