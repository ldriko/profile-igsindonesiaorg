<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class TeachingMaterialSeeder extends Seeder
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

        $teachingMaterials = [
            [
                'title' => [
                    'id' => 'Dasar Perencanaan Proyek Sains Data - Buku Ajar Berbasis OBE',
                    'en' => 'Fundamentals of Data Science Project Planning - OBE-Based Textbook',
                ],
                'program' => [
                    'id' => 'Sarjana Sains Data',
                    'en' => 'Bachelor of Data Science',
                ],
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-634-7158-14-7',
                'year' => 2025,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/188',
            ],
            [
                'title' => [
                    'id' => 'ENTERPRISE RESOURCE PLANNING-Membangun Sistem Informasi Terintegrasi dengan Odoo dan Web: Pendekatan Problem-Based Learning',
                    'en' => 'ENTERPRISE RESOURCE PLANNING-Building Integrated Information Systems with Odoo and Web: Problem-Based Learning Approach',
                ],
                'program' => [
                    'id' => 'Sarjana Informatika',
                    'en' => 'Bachelor of Informatics',
                ],
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-634-7158-39-0',
                'year' => 2025,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/189',
            ],
            [
                'title' => [
                    'id' => 'Problem Based Learning, Bahan Ajar Enterprise Resource Planning (ERP) Berbasis ODOO',
                    'en' => 'Problem Based Learning, ODOO-Based Enterprise Resource Planning (ERP) Teaching Materials',
                ],
                'program' => [
                    'id' => 'Sarjana Informatika',
                    'en' => 'Bachelor of Informatics',
                ],
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-623-8224-63-0',
                'year' => 2024,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/168',
            ],
            [
                'title' => [
                    'id' => 'Enterprise Resource Planning dengan Odoo',
                    'en' => 'Enterprise Resource Planning with Odoo',
                ],
                'program' => [
                    'id' => 'Sarjana Informatika, Sistem Informasi',
                    'en' => 'Bachelor of Informatics, Information System',
                ],
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-623-8224-29-6',
                'year' => 2023,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/192',
            ],
            [
                'title' => [
                    'id' => 'Enterprise Resource Planning',
                    'en' => 'Enterprise Resource Planning',
                ],
                'program' => [
                    'id' => 'Sarjana Informatika',
                    'en' => 'Bachelor of Informatics',
                ],
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-623-6133-82-8',
                'year' => 2021,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/24',
            ],
        ];

        foreach ($teachingMaterials as $teachingMaterial) {
            $personalInfo->teachingMaterials()->create($teachingMaterial);
        }
    }
}
