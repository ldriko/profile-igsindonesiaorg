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
                'title' => 'Dasar Perencanaan Proyek Sains Data - Buku Ajar Berbasis OBE',
                'program' => 'Bachelor of Data Science',
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-634-7158-14-7',
                'year' => 2025,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/188',
            ],
            [
                'title' => 'ENTERPRISE RESOURCE PLANNING-Membangun Sistem Informasi Terintegrasi dengan Odoo dan Web: Pendekatan Problem-Based Learning',
                'program' => 'Bachelor of Informatics',
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-634-7158-39-0',
                'year' => 2025,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/189',
            ],
            [
                'title' => 'Problem Based Learning, Bahan Ajar Enterprise Resource Planning (ERP) Berbasis ODOO',
                'program' => 'Bachelor of Informatics',
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-623-8224-63-0',
                'year' => 2024,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/168',
            ],
            [
                'title' => 'Enterprise Resource Planning dengan Odoo',
                'program' => 'Bachelor of Informatics, Information System',
                'type' => 'Textbook',
                'format' => 'Printed',
                'isbn' => '978-623-8224-29-6',
                'year' => 2023,
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/192',
            ],
            [
                'title' => 'Enterprise Resource Planning',
                'program' => 'Bachelor of Informatics',
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
